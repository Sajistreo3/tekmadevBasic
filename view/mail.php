<?php

if (isset($_POST['sendMail'])) {
    if(isset( $_POST['name']))
    $name = $_POST['name'];
    if(isset( $_POST['email']))
    $email = $_POST['email'];
    if(isset( $_POST['message']))
    $message = $_POST['message'];
    if(isset( $_POST['subject']))
    $subject = $_POST['subject'];
    
    $content="From: $name \n Email: $email \n Message: $message";
    $recipient = "tekmadev@gmail.com";
    $mailheader = "From: $email \r\n";
    if (mail($recipient, $subject, $content, $mailheader)) {
        header("location: index.php?email=sent");
    } else {
        echo "error";
        header("location: index.php?email=not-sent");
    }
    
    echo "Email sent!";
} else {
    echo "error";
    header("location: index.php?email=not-sent");
}
?>