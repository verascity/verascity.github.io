<?php $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "vsticker@ganymedetechnology.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#44BBA4;'> Return Home</a>";
?>