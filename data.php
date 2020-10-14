<?php
$to = "afzalmlakdawala@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

echo "hello world";
mail($to,$subject,$txt,$headers);
?>