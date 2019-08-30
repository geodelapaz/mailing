<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

require_once 'vendor/autoload.php';

$atttachment_url = '';
$target_email = [];

$email_server = '';
$email_port = 587;
$email_username = '';
$email_name = '';
$email_password = '';

$subject_content = '';
$body_content = '';

$file_name = '';

// made into array just to make it clean somewhat
// personall preferrence
$args = array(
    'username' => $email_username,
    'password' => $email_password,
    'subject' => $subject_content,
    'content' => $body_content,
    'to' => $target_email,
    'from' => $email_username,
    'fromName' => $email_name,
);
 
$transport = Swift_SmtpTransport::newInstance($email_server, $email_port)
    ->setUsername($args['username'])
    ->setPassword($args['password'])
    ->setEncryption('tls')
    ->setStreamOptions([
        'ssl' => [
            'verify_peer' => 0,
            'verify_peer_name' => 0,
        ]
    ])
;

$message = Swift_Message::newInstance()
    ->setSubject($args['subject'])
    ->setSender($args['from'])
    ->setFrom($args['from'])
    ->setTo($args['to'])
    ->setBody($args['content'], 'text/html')
;

$attachment = Swift_Attachment::fromPath($atttachment_url); 
$attachment->setFilename($file_name);
 
$message->attach($attachment);

$mailer = Swift_Mailer::newInstance($transport);
$mailer->send($message);