<?php
//get data from form  
$name = $_POST['fullname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "nishanthnamana48@mail.com";
$subject = "Mail From StockStalker";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: krishnamohan.mme@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>