<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$telephone= $_POST['telephone'];
$sub= $_POST['subject'];
$message= $_POST['message'];

$to = "puvanvenkatraman@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n telephone=" . $telephone . "\r\n Subject = " .$sub . "\r\n Message=" . $message ; ;
$headers = "From: puvankumarv@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>