<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $subject = trim($_POST["subject"]);
        $message = trim($_POST["message"]);
        if ( empty($name) OR empty($email) OR empty($subject) OR empty($message) OR !filter_var(FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "<script>alert('Please complete the form and try again.');
            document.location.href = 'contact.php';</script>

            ";
            exit(0);
        }
        $recipient = "atulksingh.15@gmail.com,shukal.gaurav12@gmail.com,satyanshu199@gmail.com";
        $subject = "Website Enquiry Form  - $subject";
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Subject: $subject\n";
        $email_content .= "Message: $message\n";
        $email_headers = "From: $name <$email>";
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            http_response_code(200);
            echo "<script>alert('Thank You! Your message has been sent.');
            document.location.href = 'index.html';</script>";
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>