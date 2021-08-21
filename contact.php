<?php

$name = $_POST['name'];
$visitors_number = $_POST['number'];
$visitors_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'niureamrit100@gmail.com';
$email_subject = "New Form Submission";
$email_body = "User Name:$name.\n".
                "User number :$visitors_number.\n". 
                "User email :$visitors_email.\n".
                "User message :$message.\n";

$to = "niureamrit2@gmail.com";
$headers = "From $email_from \r\n";
$headers .= "Reply-To : $visitors_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");

?>