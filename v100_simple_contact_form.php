<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 if (!empty($name) && !empty($email) && !empty($message)) {
  $to = 'recipient@example.com';
  $subject = 'Contact Form Submission';
  $message = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email" . "\r\n" .
           "Reply-To: $email" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();
 
  if (mail($to, $subject, $message, $headers)) {
   echo 'Thanks for contacting us, we will be touch soon';
  } else {
   echo 'sorry error occur please try after some time';
  }
 } else {
  echo 'fill the fields';
 }
}
?>
<form method="post" action="v100_simple_contact_form.php">
  <label for="name">Name:</label><br>
  <input type="text" name="name" id="name"><br>
  <label for="email">Email:</label><br>
  <input type="email" name="email" id="email"><br>
  <label for="message">Message:</label><br>
  <textarea name="message" id="message"></textarea><br>
  <input type="submit" value="Submit">
</form>