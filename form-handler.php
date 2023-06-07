<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_Post['Message'];

$email_from ='info@lucasites.com';
$email_subject = 'New Form Submission'
$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n";

$to = 'luca.cernea.galaxy@gmail.com';

$headers = "From: $email_from \r\n";
$headers . = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>