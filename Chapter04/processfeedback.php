<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$toaddress = "1094425279@qq.com";
$subject = "Feedback from web site";
$mailcontent = "Customer name:" . filter_var($name) . "\n" .
	"Customer email:" . $email . "\n" .
	"Customer comments:\n" . $feedback . "\n";
$fromaddress = "From: webserver@example.com";
mail($toaddress, $subject, $mailcontent, $fromaddress);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback has been sent.</p>
</body>
</html>
