<?php
   $name=$_POST['name'];
   $visitor_email=$_POST['email'];
   $message=$_POST['message']
   $email_from='bs7@gmail.com';
   $email_subject='slam-book';
   $email_body="User Name:$name.\n"
   				 "User Email: $visitor_email.\n"
   				 "User Message:$message.\n";
   	$to="bp1308@srmist.edu.in"
   	$headers="From: $emai_from\r \n";
   	mail($to,$email_subject,$email_body,$headers);
   	header("Location: index.html")
 ?>