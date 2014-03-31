<?php 

$email=  $_POST["email"];

$file = fopen("email.txt","w");
 fwrite($file,$email);
 $from="dewmal.anicitus@gmail.com";
 mail("dewmal.anicitus@gmail.com","test","test","From: $from\n");
fclose($file);

 ?>

