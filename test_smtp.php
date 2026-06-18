<?php
// Enable SMTP transcript in PHP error log for this test run.
define('SMTP_DEBUG_MODE', true);

// Also stream SMTP debug directly to browser for immediate troubleshooting.
define('SMTP_DEBUG_BROWSER', true);

require_once 'phpmailer_vendor/autoload.php';
require_once 'smtp_functions.php';

$to = 'kiran@dvi.co.in';
$subject = 'DVI SMTP Test ' . date('Y-m-d H:i:s');

$ok = SMTP_EMAIL_CONFIG(
    $to,
    '',
    '',
    'sales@dvi.co.in',
    '',
    'DVI Test',
    $subject,
    '<h3>SMTP test from DVI</h3><p>If you got this, sending works.</p>'
);

if ($ok) {
    echo 'MAIL_SENT<br>';
    echo 'Subject: ' . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') . '<br>';
    echo 'To: ' . htmlspecialchars($to, ENT_QUOTES, 'UTF-8') . '<br>';
    echo 'Check PHP error log for SMTP DEBUG and Message-ID.';
} else {
    echo 'MAIL_FAILED<br>';
    echo 'Check PHP error log for PHPMailer error details.';
}
