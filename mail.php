<?php
$email = $_POST['contactemail'];

$formcontent="Email: $email";

$recipient = 'mattbrody@codifyacademy.com'; //my email

$subject = "new email from Cybrid Industries Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.html';
  header('Location: ' . $home_url);
?>