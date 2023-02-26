<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'ap.catedrilla21@gmail.com';

    $email_subject = "New Form Submission";


    $email_body = "User Name: $name.\n".
                  "User email: $email.\n".
                  "User Message: $message.\n";

    $to = "ja.catedrilla21@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: contact.php");
?>