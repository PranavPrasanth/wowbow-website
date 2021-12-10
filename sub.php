
<?php
$email= $_POST['Email'];
$to = "pranavvv6632@gmail.com";
$subject = "Mail From wow-bow";
$txt ="Email = ". $email;
"CC: roundrobin450@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:thankyou.html");
?>




