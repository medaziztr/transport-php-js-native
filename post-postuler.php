﻿<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];
    
    extract($_POST,EXTR_OVERWRITE);

    $vehicules="";
    $vehi=$_POST['vehicules'];
    $message=$_POST['message'];
    $to_telephone=$_POST['to_telephone'];

    foreach ($vehi as $t){
        $vehicules.=";".$t;
    }
    $avance=$_POST['avance'];
	$montant=$_POST['montant'];
    $id_chargement=$_POST['id_chargement'];

    $insertSQL="INSERT INTO `postuler` (`vehicules`, `avance`, `telephone`, `montant`, `id_chargement`, `message`, `devise` ) VALUES 
     ('$vehicules', '$avance',  '$telephone', '$montant', '$id_chargement', '$message', '$devise')";

    $result = mysqli_query($db,$insertSQL);
   
    if (!$result) 
{
    die('Invalid query: ' . mysql_error());
}
else
{
    $id=mysqli_insert_id($db);
    $insertSQL1="INSERT INTO `notifications` (`type`, `id_postuler`, `telephone`, `contenu`, `id_chargement`, `to_telephone` ) VALUES 
     ('Soumission', '$id',  '$telephone', 'Vous avez une nouvelle proposition de transport.', '$id_chargement', '$to_telephone')";


 
    $result1 = mysqli_query($db,$insertSQL1);




    echo "Success";

    
    $headers="";
    $email=$_SESSION['email'];

    $to=$_POST['mail'];

   
    
    $sujet="Vous avez une nouvelle proposition de transport.";
    
    $subject = "Send HTML Email in PHP by CodexWorld"; 
 
    $htmlContent = ' 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                font-family: sans-serif;
            }
            .bouton{
                padding: 1rem 1.2rem;
                background-color: #1877f2;
                color: white;
                border-radius: 5px;
                display: block;
                width: 30%;
                margin-bottom: 1rem;
                text-decoration: none;
                margin: auto;
                text-align: center;
            }
            .mt-1{
                margin-top: 1rem;
                display: block;
            }
            .text-center{
                text-align: center;
                display: block;
            }
            .link{
                color: #1877f2;
                display: block;
            }
        </style>
    </head>
    <body>
        <table width="100%" cellpadding="0" cellspacing="0" style="width:100%;height:100%" bgcolor="#ffffff">
            <tbody>
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" style="width:540px" bgcolor="#ffffff">
                            <tbody>
                                <tr>
                                    <td style="line-height:1px;font-size:1px;height:5px" bgcolor="#1877f2">.</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" cellpadding="0" cellspacing="0" style="border-color:#ebecee;border-style:solid;border-width:0 1px 1px">
                                            <tbody>
                                                <tr>
                                                    <td align="left" style="padding:64px 60px 30px">
                                                        <img src="https://telefret.com/logo.png" alt="Telefret" height="35" style="display:block;line-height:1px;border:0" class="CToWUd">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-size:14px;padding:0 60px 30px">
                                                        <span class="im">
                                                            <h1 style="font-weight:300;font-size:22px;line-height:1.3em;color:#313745;margin:0 0 0.35em;padding:0">Notification</h1>
                                                            <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left">Vous avez une nouvelle proposition de transport.</p>
                                                            <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left">Email du transporteur: '.$email .'.</p>
                                                            <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left">Téléphone du transporteur: '.$telephone .'.</p>
                                                            <h3 style="font-weight:300;font-size:22px;line-height:1.3em;color:#313745;margin:0 0 0.35em;padding:0">Message du transporteur:</h3>
                                                            <p style="font-size:14px;line-height:1.5em;margin-bottom:1em;color:#313745;margin-top:0" align="left"> '.$message .'.</p>


                                                            </span>
    
                                                        <a class="bouton" href="https://telefret.com/notifications.php"> Cliquez ici</a>
    
                                                        <span class="text-center mt-1">ou copiez ce lien et collez le dans votre navigateur</span>
                                                        <span class="link text-center mt-1">https://telefret.com/notifications.php</span>
                                                      
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td align="center" style="border-top-style:solid;border-top-width:1px;border-top-color:#ebecee;color:#6c7689;font-size:12px;padding:20px 0" bgcolor="#F8F8FA">
                                                    Avez-vous des Questions? <a href="#" style="color:#276ee5;text-decoration:none" target="_blank" data-saferedirecturl="#">Nous sommes là pour vous aider.</a>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <span class="im">
                            <table cellpadding="0" cellspacing="0" style="width:540px;margin-top:24px">
                                <tbody>
                                    <tr>
                                        <td align="center">
                                            <h2 style="font-weight:500;margin:0;padding:0;font-size:12px;line-height:1.5em;text-transform:uppercase;letter-spacing:.02em;color:#313745">Powered by Telefret</h2>
                                            <h3 style="font-weight:300;color:#6c7689;font-size:12px;letter-spacing:.02em;line-height:20px;margin:0;padding:0">Telefret the collaborative digital freight platform</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>
    
    '; 
     
    // Set content-type header for sending HTML email 
    //$headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n"; 
  
     
    // Send email 

    mail($to.",commercial@telefret.com",$sujet, $htmlContent,"Content-type:text/html;charset=UTF-8");

    header("location: espace-transporteur.php?ok=Vous avez postuler a cette offre avec succès!");

}
    }
else{
    header("location: espace-transporteur.php?msg=cnx");
}

?>