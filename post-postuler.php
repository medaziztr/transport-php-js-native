<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];

    
    extract($_POST,EXTR_OVERWRITE);

    $vehicules="";
    $vehi=$_POST['vehicules'];

    foreach ($vehi as $t){
        $vehicules.=";".$t;
    }
    $avance=$_POST['avance'];
	$montant=$_POST['montant'];
    $id_chargement=$_POST['id_chargement'];

    $insertSQL="INSERT INTO `postuler` (`vehicules`, `avance`, `telephone`, `montant`, `id_chargement`) VALUES 
     ('$vehicules', '$avance',  '$telephone', '$montant', '$id_chargement')";

    $result = mysqli_query($db,$insertSQL);
   
    if (!$result) 
{
    die('Invalid query: ' . mysql_error());
}
else
{
    $id=mysqli_insert_id($db);
    $insertSQL1="INSERT INTO `notifications` (`type`, `id_postuler`, `telephone`, `contenu`, `id_chargement`) VALUES 
     ('Soumission', '$id',  '$telephone', 'Vous avez une nouvelle proposition de transport.', '$id_chargement')";
 
    $result1 = mysqli_query($db,$insertSQL1);
    echo "Success";
    header("location: espace-client.php?ok=Vous avez postuler a cette offre avec succès!");

}
    }
else{
    header("location: espace-client.php?msg=cnx");
}

?>