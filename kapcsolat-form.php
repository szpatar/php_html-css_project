<?php

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject= $_POST['subject'];

$to = "szpatar@mail.com";

$txt ="Név = ". $name . "\r\n  Email cím = " . $email . "Tárgy = ". $subject . "\r\n Üzenet =" . $message;


if($email!=NULL){
    mail($to,$subject,$txt);
}

header("Location:email-response.html");
?>