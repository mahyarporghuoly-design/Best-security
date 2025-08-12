<?php
if($_SERVER['REQUEST_METHOD']!=='POST'){header('Location: contact.html');exit;}
function clean($s){return trim(substr(preg_replace('/[\r\n]|(Content-Type:)/i','',$s),0,1000));}
$name=clean($_POST['name'] ?? '');$phone=clean($_POST['phone'] ?? '');$email=filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);$msg=trim($_POST['message'] ?? '');
if(!$name||!$phone||!$email||!$msg){header('Location: contact.html?error=1');exit;}
$to='info@bestsecurity.com';$subject='درخواست از سایت';$body="نام: $name\nتلفن: $phone\nایمیل: $email\n\nپیام:\n$msg";
$headers='From: no-reply@'.($_SERVER['SERVER_NAME'] ?? 'localhost') ."\r\nReply-To: $email";
mail($to,$subject,$body,$headers);
header('Location: contact.html?sent=1');exit;
?>