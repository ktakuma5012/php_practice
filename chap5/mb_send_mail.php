<?php

$to = 'kishikawa0102@gmail.com';
$subject = '独習PHP 改訂版';

$body = 'こんにちは！ mb_send_mail関数';
$headers = "From: user@example.com";
$headers = "Cc: yamada@example.com";
$headers = "X-Mailer PHP7";

if (mb_send_mail($to, $subject, $body, $headers)) {
    print "mail send!";
} else {
    print "not send!";
}
