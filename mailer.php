<?php
     echo $to = 'd.metelka11@gmail.com';
     echo $subject = $_POST['name'] . " " . $_POST['last_name'];
     echo $message = $_POST['body_text'];
     echo $from = $_POST['email'];
     echo $headers = "From:" . $from;
     
     mail($to,$subject,$message,$headers);




















?>