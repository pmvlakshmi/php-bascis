<?php
// Keep in mind that the mail() function may not work on your server 
// if it is not configured correctly. 
// You may need to consult your hosting provider or system administrator for 
// help setting up email functionality on your server.

// Alternatively, you can use a third-party library such as PHPMailer or
// Swift Mailer to send email from PHP. These libraries offer more advanced 
// features and are more reliable than the built-in mail() function.

$to = 'pmvl.muna@gmail.com';
$subject = 'Email Subject';
$message = 'This is the message body';
$headers = 'From: sender@example.com' . "\r\n" .
           'Reply-To: sender@example.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers))
{
 echo 'Email has been send to' . $to;
}
else
{
 echo 'There was a some error sending a mail';
}