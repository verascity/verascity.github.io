<?php 

$name = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $message = test_input($_POST["message"]);
}

function test_input($data) {
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$formcontent="From: $name \n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "vsticker@ganymedetechnology.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#44BBA4;'> Return Home</a>";
?>