<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
    echo json_encode($_POST) ;
    extract($_POST,EXTR_OVERWRITE);
	
    $telephone=$_SESSION['telephone'];
	
    $today=strtotime(date('d-m-Y'));
    $today1=date('d/m/Y');
    
	$selectSQL="SELECT * FROM abonnements WHERE telephone='$telephone'";
	$resultat = mysqli_query($db,$selectSQL);
	$s=mysqli_num_rows($resultat);
    echo $_SESSION['date_limite1'];
									
    if ( ($_SESSION['date_limite'] >= $today) AND ($s==0) ){
        $valide=9;
		$onemonth="1 months";
        $date_fin=date('d/m/Y', strtotime($onemonth));
		
		/*$_SESSION['date_limite1'];*/
    }
    else{
        $valide=0;
        $date_fin= date('d/m/Y', strtotime($pack));
    }
     
	if (empty($_POST['gps'])){
            $gpst="0";
        }
    else{
        $gpst="1";
    }
    
    function getExtension($str) {
        $i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }	
    echo $_FILES['avat']['name'];

  
    if ($_FILES['avat']['name']!="") {
        echo "FILES['avat']['name']";


    $filename1 = stripslashes($_FILES['avat']['name']);
    
    $extension1 = getExtension($filename1);
    $extension1 = strtolower($extension1);
    
    $image_name1=time().'1.'.$extension1;
    
    $newname1="./img/uploaded/".$image_name1;
    $newname11=$image_name1;
    
    $copied = copy($_FILES['avat']['tmp_name'], $newname1);
        $img_vehicule=$image_name1;
    }else{
    $img_vehicule=$old_image;
    echo "FILES['avat']['name']111";

}

$pppppppppp=11111;
    

    $insertSQL= "UPDATE `abonnements` SET `matricule`='$matricule', `marque`='$marque', `date_deb`='$date_deb', `date_fin`='$date_fin', `gps`='$gps', `telephone`='$telephone', `type_vehicule`='$type_vehicule', `poid_max`='$poid_max', `img_vehicule`='$img_vehicule', `valide`='$valide', `nom_chauffeur`='$nom_chauffeur', `telephone_chauffeur`='$telephone_chauffeur' , `autre_info`='$autre_info' WHERE `id_abonnement`='$id_abonnement'";
    $result = mysqli_query($db,$insertSQL);
    
    header("location: abonnement.php");
    
    }

?>