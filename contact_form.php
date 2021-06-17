<?php

    if(isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
		
        if (empty($full_name) || empty($email) || empty($phone) || empty($message)) {
        	header("location: contact.php?failed");
        }
        else {
        
        	$from = $email;
            $to = "minh.nguyen@kansaschristian.edu";
            $header = "From: $from \r \n";
            $header = "Reply-to: $from";
        
            $subject = "New Message";
            $content = "You have received a new message from your website. \n\nThis is the customer's information: \n   Full name: $full_name \n   Email: $from \n   Phone: $phone \n   Message: $message \n\nPlease contact them back as soon as possible.";

                if (mail($to, $subject, $content, $header)) {
                    header("location: contact.php?success");
                }
        }
    }
    
?>