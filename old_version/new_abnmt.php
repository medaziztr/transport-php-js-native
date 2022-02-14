<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
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
    
    $filename1 = stripslashes($_FILES['avat']['name']);
    
    $extension1 = getExtension($filename1);
    $extension1 = strtolower($extension1);
    
    $image_name1=time().'1.'.$extension1;
    
    $newname1="./img/uploaded/".$image_name1;
    $newname11=$image_name1;
    
    $copied = copy($_FILES['avat']['tmp_name'], $newname1);
    

    $insertSQL="INSERT INTO `abonnements` (`matricule`, `marque`, `date_deb`, `date_fin`, `gps`, `telephone`, `type_vehicule`, `poid_max`, `img_vehicule`, `valide`) VALUES ('$matricule', '$marque', '$today1', '$date_fin', '$gpst', '$telephone', '$type_vehicule', '$poid_max', '$image_name1', '$valide')";

    $result = mysqli_query($db,$insertSQL);
    
    header("location: abonnement.php");
    
    }

?>