<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
require_once 'phpmailer_vendor/autoload.php';

// Ensure the function is defined only once
if (!function_exists('flattenAndValidateEmails')) {
	function flattenAndValidateEmails($emails)
	{
		$valid_emails = [];
		if (is_array($emails)) {
			foreach ($emails as $email) {
				if (is_array($email)) {
					$valid_emails = array_merge($valid_emails, flattenAndValidateEmails($email));
				} elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$valid_emails[] = $email;
				}
			}
		} elseif (filter_var($emails, FILTER_VALIDATE_EMAIL)) {
			$valid_emails[] = $emails;
		}
		return $valid_emails;
	}
}

if (!function_exists('maskEmailAddress')) {
	function maskEmailAddress($email)
	{
		$email = (string) $email;
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return $email;
		}

		[$local, $domain] = explode('@', $email, 2);
		$localStart = substr($local, 0, 2);
		return $localStart . '***@' . $domain;
	}
}

if (!function_exists('maskEmailList')) {
	function maskEmailList($emails)
	{
		if (!is_array($emails)) {
			return maskEmailAddress($emails);
		}

		return array_map('maskEmailAddress', $emails);
	}
}

if (!function_exists('redactBrevoSmtpValue')) {
	function redactBrevoSmtpValue($value, $smtpUsername)
	{
		$value = (string) $value;

		// Redact SMTP username and any possible password/auth content.
		$value = str_replace($smtpUsername, '[SMTP_USERNAME_REDACTED]', $value);
		$value = preg_replace('/(Password|SMTP_PWD|AWS_SMTP_PWD|pass|pwd)\s*[:=]\s*[^\s,]+/i', '$1=[REDACTED]', $value);
		$value = preg_replace('/AUTH\s+(LOGIN|PLAIN).*/i', 'AUTH [REDACTED]', $value);

		// PHPMailer SMTP debug can print credentials/body in CLIENT lines.
		// Keep SERVER lines, redact all CLIENT lines.
		$value = preg_replace('/CLIENT\s*->\s*SERVER:.*/i', 'CLIENT -> SERVER: [REDACTED]', $value);

		return $value;
	}
}

if (!function_exists('writeBrevoFailureLog')) {
	function writeBrevoFailureLog($logFile, $debugId, $smtpUsername, $message, array $context = [])
	{
		$safeContext = [];

		foreach ($context as $key => $value) {
			if (is_array($value)) {
				$safeContext[$key] = array_map(function ($item) use ($smtpUsername) {
					return redactBrevoSmtpValue($item, $smtpUsername);
				}, $value);
			} else {
				$safeContext[$key] = redactBrevoSmtpValue($value, $smtpUsername);
			}
		}

		$line = [
			'time' => date('c'),
			'debug_id' => $debugId,
			'message' => redactBrevoSmtpValue($message, $smtpUsername),
			'context' => $safeContext,
		];

		@file_put_contents(
			$logFile,
			json_encode($line, JSON_UNESCAPED_SLASHES) . PHP_EOL,
			FILE_APPEND
		);
	}
}

function SMTP_EMAIL_CONFIG($to, $cc, $reply_to, $send_from, $Bcc, $sender_name, $subject, $body, $attachment = NULL)
{
	// Replace smtp_username with your Brevo SMTP user name.
	// $AWS_SMTP_UN = '908cde001@smtp-brevo.com';

	// Replace smtp_password with your Brevo SMTP password / SMTP key.
	// $AWS_SMTP_PWD = 'OLD_SMTP_PASSWORD_REMOVED';

	// $SMTP_HOST = 'smtp-relay.brevo.com';
	// $SMTP_PORT = 2525;

	// Brevo SMTP relay configuration.
	$AWS_SMTP_UN = 'aaebfc001@smtp-brevo.com';
	$AWS_SMTP_PWD = 'bskayz0BEeK4OuQ';

	$SMTP_HOST = 'smtp-relay.brevo.com';
	$SMTP_PORT = 587;

	$default_bcc = 'vsr@dvi.co.in';
	$mail = new PHPMailer(true);

	try {
		$debugId = date('Ymd-His') . '-' . bin2hex(random_bytes(4));
	} catch (\Throwable $e) {
		$debugId = date('Ymd-His') . '-' . uniqid('', true);
	}

	$logDir = __DIR__ . '/logs';

	if (!is_dir($logDir)) {
		@mkdir($logDir, 0755, true);
	}

	$brevoLogFile = $logDir . '/brevo-smtp-' . date('Y-m-d') . '.log';
	$smtpDebugLines = [];

	try {
		// Server settings
		$mail->isSMTP(); // Set mailer to use SMTP
		$mail->SetFrom($send_from, $sender_name);
		$mail->Username = $AWS_SMTP_UN; // SMTP username
		$mail->Password = $AWS_SMTP_PWD; // SMTP password
		$mail->Host = $SMTP_HOST; // Specify main and backup SMTP servers
		$mail->Port = $SMTP_PORT; // 465 - https | 587 - http | 2465 - AWS CLOUD
		$mail->SMTPAuth = true; // Enable SMTP authentication
		$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
		$mail->Timeout = 30;
		$mail->CharSet = 'UTF-8';

		// Failure-only SMTP diagnostics:
		// PHPMailer debug is captured in memory and written to file only if sending fails.
		// Successful emails will not create attempt/success/debug log lines.
		$mail->SMTPDebug = 2;
		$mail->Debugoutput = function ($str, $level) use (&$smtpDebugLines, $AWS_SMTP_UN) {
			$smtpDebugLines[] = 'level=' . $level . ' ' . redactBrevoSmtpValue(trim($str), $AWS_SMTP_UN);
		};

		// Collect and validate TO addresses
		$to_addresses = flattenAndValidateEmails($to);

		// Collect and validate BCC addresses
		$bcc_addresses = flattenAndValidateEmails($Bcc);

		// Collect and validate CC addresses
		$cc_addresses = flattenAndValidateEmails($cc);

		// Collect and validate Reply-To addresses
		$replyto_addresses = flattenAndValidateEmails($reply_to);

		// Always ensure the default BCC is included
		if (!in_array($default_bcc, $bcc_addresses)) {
			$bcc_addresses[] = $default_bcc;
		}

		// Add addresses to the mail object
		foreach ($to_addresses as $email) {
			$mail->addAddress($email);
		}

		foreach ($bcc_addresses as $email) {
			$mail->addBCC($email);
		}

		foreach ($cc_addresses as $email) {
			$mail->addCC($email);
		}

		foreach ($replyto_addresses as $email) {
			$mail->addReplyTo($email);
		}

		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $body;

		if ($attachment) {
			$mail->addAttachment($attachment);
		}

		$send = $mail->send();

		// No logging on success.
		if ($send === true) {
			return true;
		}

		// Defensive fallback: PHPMailer(true) usually throws on failure,
		// but log here too in case send() returns false without throwing.
		writeBrevoFailureLog($brevoLogFile, $debugId, $AWS_SMTP_UN, 'Brevo SMTP send failed', [
			'host' => $SMTP_HOST,
			'port' => $SMTP_PORT,
			'secure' => 'tls',
			'smtp_user' => $AWS_SMTP_UN,
			'from' => maskEmailAddress($send_from),
			'to' => maskEmailList($to_addresses),
			'cc' => maskEmailList($cc_addresses),
			'bcc_count' => count($bcc_addresses),
			'reply_to' => maskEmailList($replyto_addresses),
			'subject' => $subject,
			'body_length' => strlen((string) $body),
			'attachment' => $attachment ? basename($attachment) : null,
			'result' => 'false',
			'phpmailer_error_info' => $mail->ErrorInfo,
			'smtp_debug' => $smtpDebugLines,
		]);

		error_log("Brevo SMTP send failed [$debugId]: {$mail->ErrorInfo}");

		return false;
	} catch (\Throwable $e) {
		writeBrevoFailureLog($brevoLogFile, $debugId, $AWS_SMTP_UN, 'Brevo SMTP send failed', [
			'host' => $SMTP_HOST,
			'port' => $SMTP_PORT,
			'secure' => 'tls',
			'smtp_user' => $AWS_SMTP_UN,
			'from' => isset($send_from) ? maskEmailAddress($send_from) : '',
			'to' => isset($to_addresses) ? maskEmailList($to_addresses) : maskEmailList(flattenAndValidateEmails($to)),
			'cc' => isset($cc_addresses) ? maskEmailList($cc_addresses) : maskEmailList(flattenAndValidateEmails($cc)),
			'bcc_count' => isset($bcc_addresses) ? count($bcc_addresses) : count(flattenAndValidateEmails($Bcc)),
			'reply_to' => isset($replyto_addresses) ? maskEmailList($replyto_addresses) : maskEmailList(flattenAndValidateEmails($reply_to)),
			'subject' => $subject,
			'body_length' => strlen((string) $body),
			'attachment' => $attachment ? basename($attachment) : null,
			'exception_class' => get_class($e),
			'exception_message' => $e->getMessage(),
			'phpmailer_error_info' => $mail->ErrorInfo,
			'smtp_debug' => $smtpDebugLines,
		]);

		error_log("Brevo SMTP send failed [$debugId]: {$e->getMessage()} | {$mail->ErrorInfo}");

		return false;
	}
}