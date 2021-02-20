<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'iammayur.515@gmail.com';
    $email_subject = 'Mail From Website';
    $email_body = "Name: $name. \n".
                    "Email ID: $visitor_email. \n".
                    "Message: $message. \n";
    
    $to = "iammayur.515@gmail.com";
    
    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");


?>