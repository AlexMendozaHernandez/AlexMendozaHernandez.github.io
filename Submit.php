<!DOCTYPE html>
<html>
<head>
	<title>Alex Mendoza-Hernandez</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "alexmendozahernandez1021@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";
  mail($to, $subject, $body, $headers);
  echo "Thank you for your message!";
}
?>
</html>