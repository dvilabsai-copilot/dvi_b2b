<?php
/**
 * test_mail.php
 *
 * Place this file in the same folder as smtp_functions.php.
 * Then run it either from browser or command line:
 *
 * Browser:
 *   http://localhost/path/to/test_mail.php
 *
 * Command line:
 *   php test_mail.php
 *
 * Optional:
 *   php test_mail.php customer@example.com
 *   http://localhost/path/to/test_mail.php?to=customer@example.com
 */

date_default_timezone_set('Asia/Kolkata');

require_once __DIR__ . '/smtp_functions.php';

function testMailResponse($success, $message, $extra = [])
{
    $payload = [
        'success' => $success,
        'message' => $message,
        'time' => date('c'),
        'extra' => $extra,
    ];

    if (PHP_SAPI === 'cli') {
        echo json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL;
    } else {
        header('Content-Type: application/json');
        echo json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    exit($success ? 0 : 1);
}

try {
    // Recipient priority:
    // 1. CLI first argument: php test_mail.php someone@example.com
    // 2. Browser query string: test_mail.php?to=someone@example.com
    // 3. Default test recipient below
    $to = null;

    if (PHP_SAPI === 'cli' && !empty($argv[1])) {
        $to = trim($argv[1]);
    } elseif (!empty($_GET['to'])) {
        $to = trim($_GET['to']);
    }

    if (!$to) {
        // Change this if you want to test with another email.
        $to = 'kiran.phpfish@gmail.com';
    }

    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        testMailResponse(false, 'Invalid recipient email.', [
            'to' => $to,
        ]);
    }

    // Use a verified sender configured in your Brevo account.
    // Change this if your verified sender is different.
    $send_from = 'sales@dvi.co.in';
    $sender_name = 'DVi Holidays Test';

    $cc = [];
    $bcc = [];
    $reply_to = ['sales@dvi.co.in'];

    $subject = 'Brevo SMTP Test Mail - ' . date('Y-m-d H:i:s');

    $body = '
        <html>
            <body style="font-family: Arial, sans-serif; line-height: 1.5;">
                <h2>Brevo SMTP Test Mail</h2>
                <p>This is a test email triggered from <strong>test_mail.php</strong>.</p>
                <p><strong>Triggered at:</strong> ' . htmlspecialchars(date('Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8') . ' IST</p>
                <p><strong>Server:</strong> ' . htmlspecialchars($_SERVER['SERVER_NAME'] ?? 'CLI', ENT_QUOTES, 'UTF-8') . '</p>
                <p>If this email is received, SMTP authentication and relay sending are working from this codebase/server.</p>
            </body>
        </html>
    ';

    $attachment = null;

    $result = SMTP_EMAIL_CONFIG(
        $to,
        $cc,
        $reply_to,
        $send_from,
        $bcc,
        $sender_name,
        $subject,
        $body,
        $attachment
    );

    $logFile = __DIR__ . '/logs/brevo-smtp-' . date('Y-m-d') . '.log';

    if ($result === true) {
        testMailResponse(true, 'Test email sent successfully.', [
            'to' => $to,
            'from' => $send_from,
            'subject' => $subject,
            'log_file' => $logFile,
        ]);
    }

    testMailResponse(false, 'Test email failed. Check the Brevo SMTP log file.', [
        'to' => $to,
        'from' => $send_from,
        'subject' => $subject,
        'log_file' => $logFile,
    ]);
} catch (Throwable $e) {
    testMailResponse(false, 'Unexpected error while sending test email.', [
        'error' => $e->getMessage(),
        'class' => get_class($e),
    ]);
}
