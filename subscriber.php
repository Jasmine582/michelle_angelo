<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name']; 
  $mailFrom = $_POST['email']; 

$mailTo = "hello@jasminecreese.com";
$headers = "New Subscriber";
$txt = "Hooray! You have a New Subscriber for your Newsletter!\n\n Name: " .$name. "\n Email Address: " .$mailFrom;

mail($mailTo,$headers,$txt);
header("Location: index.html?successful");

}