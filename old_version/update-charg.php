<?php
	include("config.php");
	session_start();
	
	extract($_POST,EXTR_OVERWRITE);
	$id_charg=$_GET['id_charg'];
	$telephone=$_SESSION['telephone'];

	$date_charg= date("d/m/Y", strtotime($date_charg));
	$date_liv= date("d/m/Y", strtotime($date_liv));
	
	echo $sql2 = "UPDATE `chargement` SET `marchandise`='$marchandise', `emballage`='$emballage', `mode_t`='$mode_t', `poid`='$poid', `nb_colis`='$nb_colis', `volume`='$volume', `type_vehicule`='$type_vehicule', `details_march`='$details_march', `pays_charg`='$pays_charg', `ville_charg`='$ville_charg', `date_charg`='$date_charg', `adresse_charg`='$adresse_charg', `pays_liv`='$pays_liv', `ville_liv`='$ville_liv', `date_liv`='$date_liv', `adresse_liv`='$adresse_liv' , `nb_vehicules`='$nb_vehicules' WHERE `id_charg`='$id_charg'";
	$rs=mysqli_query($db,$sql2);
	
	
	header("location: historique_client.php?telephone=".$telephone."&success=vos informations ont bien été modifiées");
?>