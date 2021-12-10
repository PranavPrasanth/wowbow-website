<?php
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
?>