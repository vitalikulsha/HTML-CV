<?php 
$to  = "kulsha_85@mail.ru";
$subject = "Replay to CV";
$from = $_POST['email'];
$name = $_POST['FIO'];
$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

$headers  = "Content-type: text/plain; charset=windows-1251 \r\n"; 
$headers .= "From:" . $from;
$headers .= "From:" . $to;
if (mail($to,$subject,$message,$headers)) {
	echo "OK";
}
else {
	echo "ERROR";
}
?>