<?php
   include("config.php");
   session_start();

    
    $id_disp=$_GET['id_disp'];
    


    echo $insertSQL="DELETE FROM `disponibilite` WHERE id_disp='$id_disp'";

    $result = mysqli_query($db,$insertSQL);
    
    
    if($_SESSION['type']=="admin"){ header("location: index-admin.php"); }
    else{header("location: historique.php");}

?>