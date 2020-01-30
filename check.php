<?php
    $email = $_POST['email'];
    $message = $_POST['message'];
    $error = '';
    if (trim($email) == '')
        $error = 'Enter your email';
    else if (trim($message) == '')
        $error = 'Enter message';
    else if (strlen($message) < 10)
        $error = 'Min masseg - 10 simbols';

    if ($error != '') {
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("Text message")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('maksimkoshman090@gmail.com', $subject, $message, $headers);
    header('Location: /about.php');
?>