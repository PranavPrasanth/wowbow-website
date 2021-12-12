<?php

//get data from form  
    $message_sent = false;
    if{isset(s_POST['Email']) && $_POST['Email'] !=''){
        if{filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){


            $userName = $_POST['name'];
           
            $userEmail= $_POST['email'];
            $phone = $_POST['phone'];
            $messageSubject= $_POST['subject'];
            $message = $_POST['message'];

            $to = "pranavvv6632@gmail.com";
            $subject = "Mail From wow-bow";
            
            
            $body = "";
            
            
            $body .="First Name: ".$username. "\r\n" 
            
            $body.="Email: ".$userEmail.  "\r\n"  
            $body.="phone: ".$phone. "\r\n"
            $body.="Message: ".$message. "\r\n"
            $headers = "From: noreply@wowbow.co.in" . "\r\n" .
            "CC: roundrobin450@gmail.com";
            
             //mail($to,$subject,$,$body,$headers);
            
             $message_sent=true;
            
                                             
        

        }
        else{
            $invalid_class_name = "form-invalid";
         }
     }
//redirect

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Mail</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
     <?php
     if($message_sent);
     ?>

     <h3>Thanks for condacting us !</h3>


    <?
    else:
    ?>
    <div style="background-image: url(imgges/wb.jpg);"></div>
    <div class="container">
        <form action="webform.php" method="GET" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <inpu type="text" class="form-control" <?= $invalid_class_name ?? ""?>     id="name" name="name" placeholder="Name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
    <?php
    endif:
    ?>
</body>

</html>


 




<!-- ?php
//get data from form  

$name = $_POST['First Name'];
$lname = $_POST['Last Name'];
$email= $_POST['Email'];
$phone = $_POST['phone'];
$message= $_POST['Message'];
$to = "pranavvv6632@gmail.com";
$subject = "Mail From wow-bow";
$txt ="First Name = ". $name . "\r\nLst Name = ".$lname . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@wowbow.co.in" . "\r\n" .
"CC: roundrobin450@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?> -->









