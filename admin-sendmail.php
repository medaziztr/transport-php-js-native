<?php

include("config.php");
session_start();


        
        
    
        $email=$_SESSION['login_user'];
    
        $to=$_POST['mailmsg'];
        $msg=$_POST['msg'];
    
        $sujet="Contact TELEFRET ";
    
        $headers = 'From: noreplay@telefret.com' . "\r\n" .
		'Reply-To:  noreplay@telefret.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	
        $message = wordwrap($msg,70);

        mail($to,$sujet,$message,$headers);
        
        header("Location: index-admin.php"); 

?>