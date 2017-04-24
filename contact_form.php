<?php 

$nameErr = $emailErr = $messageErr = "";
$name = $email = $phone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
    $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
    }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } else {
    $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
    }
    }
    
    if (empty($_POST["phone"])) {
        $phone = "";
    } else {
    $phone = test_input($_POST["phone"]);
    }
    
    if (empty($_POST["message"])) {
        $messageErr = "Message is required.";
    } else {
    $message = test_input($_POST["message"]);
}
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