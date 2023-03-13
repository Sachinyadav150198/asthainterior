<?php
//get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "bajrangi@rirabh.com";
$subject = "Mail From Urvya Security";
$txt ="name = ". $name . "\r\n Email = " . $email . "\r\n  Phone = " . $phone . "\r\n Message =" . $message;
$headers = "From: info@aasthainteriordesign.com";
if($phone!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou");
?>