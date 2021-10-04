<?php
$to = "magadabrian2@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: magadabrian2@gmail.com" . "\r\n" .
"CC: brianmagada2@gmail.com";

ini_set($to,$subject,$txt,$headers);
?>