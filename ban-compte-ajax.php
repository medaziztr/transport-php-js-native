<?php
   include("config.php");
   session_start();

if($_SESSION['type']=="admin"){
    
    $telephone=$_GET['telephone'];
    


    echo $insertSQL="UPDATE `transporteur` SET `verif`=5 WHERE `telephone`='$telephone'";

   echo $result = mysqli_query($db,$insertSQL);
}

?>