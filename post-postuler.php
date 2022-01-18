<?php
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
    $email=$_SESSION['login_user'];

    $to=$_POST['mail'];

    $tel=$_SESSION['telephone'];

    
    $sujet="Vous avez une nouvelle proposition de transport.";
    

    $headers  = "De la part de ".$email ."\n a  ".$to."\n";

   $headers =$headers."Numéro de telephone ".$tel;

    extract($_POST,EXTR_OVERWRITE);
    $msg = wordwrap($message,70);

    mail($to,$sujet,utf8_decode($msg),$headers);

    header("location: espace-transporteur.php?ok=Vous avez postuler a cette offre avec succès!");

}
    }
else{
    header("location: espace-transporteur.php?msg=cnx");
}

?>