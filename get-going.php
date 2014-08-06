<?php

$bannerId = $_POST['banner-id'];

$email = $_POST['email'];
$name = $_POST['name'];
$city = $_POST['city'];

$ref =  $_SERVER["HTTP_REFERER"];

if(isset($_POST['email'])){

$to      = 'staff@hellorocketship.com';
$subject = 'Banner Signup ('.$bannerId.')';
$message = $email.', '.$name.', '.$city;
$headers = 'From: mission_control@hellorocketship.com' . "\r\n" .
'Reply-To: staff@hellorocketship.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
header('Location: '.$ref.'?signup=ok');

$signup = 'ok';

} else {
	
header('Location: '.$ref.'?signup=fauilure');

}

exit;
?>