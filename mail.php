<?php

//get data from form  
    $message_sent = false;
    if{isset(s_POST['Email']) && $_POST['Email'] !=''){
        if{filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){


            $fname = $_POST['First Name'];
            $lname = $_POST['Last Name'];
            $email= $_POST['Email'];
            $phone = $_POST['phone'];
            $message= $_POST['Message'];
            $to = "pranavvv6632@gmail.com";
            $subject = "Mail From wow-bow";
            
            
            $body = "";
            
            
            $body .="First Name: ".$fname. "\r\n" 
            $body.="Last Name: ".$lname. "\r\n"
            $body.="Email: ".$Email.  "\r\n"  
            $body.="phone: ".$phone. "\r\n"
            $body.="Message: ".$message. "\r\n"
            $headers = "From: noreply@wowbow.co.in" . "\r\n" .
            "CC: roundrobin450@gmail.com";
            
             mail($to,$subject,$,$body);
            
             $message_sent=true;
            
                                             
        

        }
        else{
            $invalid_class_name = "form-invalid";
         }
     }
//redirect

?>
