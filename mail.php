<?php
//get data from form  
$fname = $_POST['Firstname'];
$lname = $_POST['Lastname'];
$email= $_POST['emailaddress'];
$number= $_POST['mobile'];
$message= $_POST['message'];
$to = "pranavvv1@gmail.com";
$subject = "Mail From wowbow";
$txt ="Name = ". $fname .$lname . "\r\n  Email = " . $email . "\r\n Phone=" .$number . "\r\n Message =" . $message;
$headers = "From: wowbow.co.in" . "\r\n" .
"CC: roundrobin450@gmai.com";
if($email!=NULL){
// mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
