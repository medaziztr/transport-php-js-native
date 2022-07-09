<?php
   include("config.php");
   session_start();

if(isset($_SESSION['login_user'])) {
    
    
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
    }
	
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
	
	
    if ($marchandise=="Autres") {
        $marchandise=$marchandise1;
        }
	

    $insertSQL="INSERT INTO `chargement` (`marchandise`, `poid`, `nb_colis`, `volume`, `type_vehicule`, `details_march`, `emballage`, `mode_t`, `valeurm`, `img_march`, `pays_charg`, `ville_charg`, `date_charg`, `adresse_charg`, `pays_liv`, `ville_liv`, `date_liv`, `adresse_liv`, `tol_charg`, `jr_retard2`, `tol_liv`, `jr_retard`, `contact_name`, `contact_phone`, `telephone`, `prix_prop` , `nb_vehicules`  , `avance` , `methodepayement`, `autre_info`, `client`, `telephoneclient`)
    
    VALUES ('$marchandise', '$poid', '$nb_colis', '$volume', '$type_vehicule', '$details_march', '$emballage', '$mode_t', '$valeurm', '$image_name1', '$pays_charg', '$ville_charg', '$date_charg', '$adresse_charg', '$pays_liv', '$ville_liv', '$date_liv', '$adresse_liv', '$toler_charge', '$jr_retard2', '$tol_liv', '$jr_retard', '$contact_name', '$contact_phone', '$telephone', '$prix_prop', '$nb_vehicules' , '$avance', '$methodepayement' , '$autre_info'  , '$client', '$telephoneclient')";

    $result = mysqli_query($db,$insertSQL);
    $telephone=$_SESSION['telephone'];
    
    extract($_POST,EXTR_OVERWRITE);

    $vehicules="";
    $vehi=$_POST['vehicules'];
    $message=$_POST['message'];
    $to_telephone=$_SESSION['telephone'];
    $id_chargement=mysqli_insert_id($db);

    foreach ($vehi as $t){
        $insertSQL1="INSERT INTO `chargement_vehicules` (`id_chargement`, `id_abonnement`) VALUES 
        ('$id_chargement', '$t')";
    
       $result1 = mysqli_query($db,$insertSQL1);
        $vehicules.=";".$t;
    }
    $avance=$_POST['avance'];
	$montant=$_POST['montant'];
    $nom=  $_SESSION['prenom']." ".$_SESSION['nom'];

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

}










//Get chargement
$id_charg=$id_chargement;

$selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

$resultat = mysqli_query($db,$selectSQL);
$row=mysqli_fetch_array($resultat);
//echo("*************************".$selectSQL."*************************");

// Create disponibilities  for all vehicules

if ($row['status']=="0") {
     
$selectSQLvehi="SELECT ab.* FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  WHERE 1 and ab.id_abonnement=chv.id_abonnement AND  ch.id_charg=chv.id_chargement and  tr.telephone=ab.telephone AND ch.id_charg=".$id_charg." ";
$empRecords = mysqli_query($db, $selectSQLvehi);
   
$date_dep= date("d/m/Y", strtotime($date_charg));
$date_arr= date("d/m/Y", strtotime($date_liv));


echo("*************************".$selectSQLvehi."*************************");
$id_chargement=$row['id_charg'];



while ($res = mysqli_fetch_assoc($empRecords)) {

    
   
//echo( json_encode ($emecord1131s+""));
    
    $poid_disp=$res['poid_max'];
    $pays_dep=$row['pays_charg'];
    $ville_dep=$row['ville_charg'];
    $date_dep=$row['date_charg'];
    $adresse_dep=$row['adresse_charg'];
    $pays_arr=$row['pays_liv'];
    $ville_arr=$row['ville_liv'];
    $date_arr=$row['date_liv'];
    $adresse_arr=$row['adresse_liv'];
    $contact_name=$row['contact_name'];
    $contact_phone=$row['contact_phone'];
    $id_ab=$res['id_abonnement'];

    $insertSQL="INSERT INTO `disponibilite` (`poid_disp`, `pays_dep`, `ville_dep`, `date_dep`, `adresse_dep`, `pays_arr`, `ville_arr`, `date_arr`, `adresse_arr`, `contact_name`, `contact_phone`, `id_abonnement`, `id_chargement`) 
                                    VALUES  ('$poid_disp', '$pays_dep', '$ville_dep', '$date_dep', '$adresse_dep', '$pays_arr', '$ville_arr', '$date_arr', '$adresse_arr', '$contact_name', '$contact_phone', $id_ab, $id_chargement)";


    $result = mysqli_query($db,$insertSQL);

    $ID_gps=$res['ID_gps'];
    $id_abonnement=$res['id_abonnement'];
    $id=mysqli_insert_id($db);
    $date_dep1= date("Y-m-d", strtotime($date_charg));
    $date_arr1= date("Y-m-d", strtotime($date_liv));
    $insertSQLstatus="INSERT INTO `status_gps` (`ID_gps`, `Date_D`, `Date_F`, `Etat`, `Id_abonnement`, `Id_dispo`, `id_chargement`) 
    VALUES  ('$ID_gps', '$date_dep1', '$date_arr1',  0, $id_abonnement, $id, $id_chargement)";

// echo( json_encode ($insertSQLstatus));
// echo( json_encode ($emecords+""));
    $result1 = mysqli_query($db,$insertSQLstatus);
   

}


    //update chargement (desactivate)


    $insertSQL= "UPDATE `chargement` SET `status`=1 WHERE `id_charg`='$id_chargement'";
    $result = mysqli_query($db,$insertSQL);
    // echo( json_encode ("selectSQLvehi"));
    // echo( json_encode ($emecords+""));


}else  if ($row['status']=="1") {

    //select status

 
$selectSQLstatus="SELECT ab.* FROM status_gps as ab  WHERE 1 and ab.id_chargement=".$id_charg." ";
$empRecords = mysqli_query($db, $selectSQLstatus);
    //update status
    $date_dep1= date("Y-m-d", strtotime($date_charg));
    $date_arr1= date("Y-m-d", strtotime($date_liv));
    while ($res = mysqli_fetch_assoc($empRecords)) {
        
        
    $id=$res['Id_status'];
    $insertSQL= "UPDATE `status_gps` SET  `Date_D`='$date_dep1', `Date_F`='$date_arr1' WHERE `Id_status`='$id'";

//     echo( json_encode ($insertSQL));
//  echo( json_encode ($emecords+""));
    $result = mysqli_query($db,$insertSQL);

    }
    # code...
}







    
    header("location: espace-client.php?ok=Votre poste de chargement a été enregistré !");
    
    }
else{
    header("location: espace-client.php?msg=cnx");
}

?>