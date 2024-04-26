<?php

    $to = "eidabdirahman2021@gmail.com";

    $subject = "New Message From Contact Form";


    $name = $_POST['name'];

    $email = $_POST['email'];

    $subject = $_POST['subject'];

    $message = $_POST['message'];


    $body = "From: $name\n E-Mail: $email\n subject: $subject\n Message:\n $message";


    // Check if the name, email, and message fields are not empty.

    if($name !== "" && $email !== "" && $message !== ""){

        // If they are not empty, proceed with sending the email.

        if (mail($to, $subject, $body)) {

            echo "Your message has been sent successfully.";

        } else {

            echo "Sorry, there was a problem sending your message. Please try again.";

        }

    } else {

		echo "<script>alert('All fields are required');</script>";

    }

?>