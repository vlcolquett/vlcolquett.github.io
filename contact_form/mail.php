<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name  \n Message: $message";
$recipient = "vlcolquett@hotmail.com";
$subject = "Contact Form from Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
