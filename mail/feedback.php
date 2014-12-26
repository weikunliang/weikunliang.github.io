<?php
        $mail_to_send_to = "weikunl@andrew.cmu.edu";
        $your_feedbackmail = "noreply@weikunliang.com";

        $sendflag = $_REQUEST['sendflag'];
        if ( $sendflag == "send" )
        {
                $email = $_REQUEST['email'] ;
                $message = $_REQUEST['message'] ;
                $headers = "From: $your_feedbackmail" . "\r\n" . "Reply-To: $email" . "\r\n" ;
                $a = mail( $mail_to_send_to, "Feedback Form Results", $message, $headers );
                if ($a) 
                {
                     print("Message was sent, you can send another one");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
        }
?>