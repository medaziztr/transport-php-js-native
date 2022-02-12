<?php
   include("config.php");
   session_start();

if($_SESSION['type']=="admin"){
    
    $id_abn=$_POST['id_abn'];
    


    echo $insertSQL="UPDATE `abonnements` SET `valide`=0 WHERE id_abonnement=$id_abn";

   echo $result = mysqli_query($db,$insertSQL);
    
}

?>