<?php 

$email=  $_POST["email"];

$file = fopen("email.txt","w");
 fwrite($file,$email);
 $from="dewmal.anicitus@gmail.com";
 
fclose($file);

 ?>

