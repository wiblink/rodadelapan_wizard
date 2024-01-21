<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("application/config/config_mail.php");
$m = new mailer;
$to = "work.agusst@gmail.com";
$subject = "My subject Test Mail";
$txt = "Hello world Test Mail!";
$headers = "ADMIN zaplowest MAIL";

if($m->sendmail($to,$headers,$subject,$txt)){
	echo "mail send to $to success";
}else{
	echo "mail send to $to failed";
}
?>