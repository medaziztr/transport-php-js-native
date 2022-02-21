<?php
	include("config.php");
	session_start();
	
	extract($_POST,EXTR_OVERWRITE);
	$id_charg=$_GET['id_charg'];
	$telephone=$_SESSION['telephone'];
 
    $telephone=$_SESSION['telephone'];

    
    extract($_POST,EXTR_OVERWRITE);

	$date_charg= date("d/m/Y", strtotime($date_charg));
	$date_liv= date("d/m/Y", strtotime($date_liv));

    if(isset($_POST['toler_charge'])){
        $toler_charge=1;
		if((!isset($_POST['jr_retard2']))){$jr_retard2=0;}
    }
    else{
        $toler_charge=0;
		$jr_retard2=0;
    }

	if(isset($_POST['tol_liv'])){
        $tol_liv=1;
		if(!(isset($_POST['jr_retard']))){$jr_retard=0;}
    }
    else{
        $tol_liv=0;
		$jr_retard=0;
    }
	
	function getExtension($str) {
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
	}	
	
	$filename1 = stripslashes($_FILES['img_march']['name']);
	$image_name1="";
    if ($_FILES['img_march']['name']!="") {
	$extension1 = getExtension($filename1);
	$extension1 = strtolower($extension1);
	
	$image_name1=time().'1.'.$extension1;
	
	$newname1="./img/uploaded/".$image_name1;
	$newname11=$image_name1;

	$copied = copy($_FILES['img_march']['tmp_name'], $newname1);
    }else
    $image_name1=$old_image;
	
	if(isset($prop_prix)){
        $prix_prop=$prix_prop.' '.$devise;
    }
	
    else{
        $prix_prop=' ';
    }
	
	if(isset($mvaleur)){
        $valeurm=$valeurm.' '.$devise;
    }
    else{
        $valeurm=' ';
    }
	
	
	

    $insertSQL="UPDATE `chargement` SET `marchandise`='$marchandise',`poid`='$poid',`nb_colis`='$nb_colis',`volume`='$volume',`type_vehicule`='$type_vehicule',
	`details_march`='$details_march',`emballage`='$emballage',`mode_t`='$mode_t',`valeurm`='$valeurm',`img_march`='$image_name1',
	`pays_charg`='$pays_charg',`ville_charg`='$ville_charg',`date_charg`='$date_charg',`adresse_charg`='$adresse_charg',`pays_liv`='$pays_liv',
	`ville_liv`='$ville_liv',`date_liv`='$date_liv',`adresse_liv`='$adresse_liv',`tol_charg`='$toler_charge',`jr_retard2`='$jr_retard2',
	`tol_liv`='$tol_liv',`jr_retard`='$jr_retard',`contact_name`='$contact_name',`contact_phone`='$contact_phone',`telephone`='$telephone',
	`prix_prop`='$prix_prop',`nb_vehicules`='$nb_vehicules' ,`avance`='$avance',`methodepayement`='$methodepayement' ,`autre_info`='$autre_info'  WHERE `id_charg`='$id_charg'";
$rs=mysqli_query($db,$insertSQL);
	
	header("location: historique_client.php?telephone=".$telephone."&success=vos informations ont bien été modifiées");
?>