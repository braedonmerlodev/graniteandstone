<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'davemerlo@comcast.net';

    $email_subject = "$subject";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Number: $number.\n".
                            "User Subject: $subject.\n".
                                "User Message: $message.\n";


    $to = "davemerlo@comcast.net";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-to: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>