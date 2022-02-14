<?php
include 'config1.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value

$now=$_POST['now'];

## Search 
$searchQuery = " ";


if($searchValue != ''){
	$searchQuery .= " and (
        ab.matricule like '%".$searchValue."%' or 
        ab.img_vehicule like '%".$searchValue."%' or 
        ab.type_vehicule like'%".$searchValue."%' or
        ab.marque like '%".$searchValue."%' or 
        ab.poid_max like '%".$searchValue."%' or 
        ab.nom_chauffeur like'%".$searchValue."%' or
        ab.telephone_chauffeur like '%".$searchValue."%' or 
        tr.nom like '%".$searchValue."%' or 
        tr.prenom like'%".$searchValue."%' or
        tr.telephone like '%".$searchValue."%' or 
        tr.email like '%".$searchValue."%' or 
        tr.r_s like'%".$searchValue."%' 
        ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  
WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
ch.id_charg=chv.id_chargement and 
tr.telephone=ab.telephone AND ch.id_charg=".$now." ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  
WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
ch.id_charg=chv.id_chargement and 
tr.telephone=ab.telephone AND ch.id_charg=".$now." ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT chv.id, ab.id_abonnement,ab.matricule,ab.img_vehicule,ab.type_vehicule,ab.marque,
ab.poid_max,ab.nom_chauffeur,ab.telephone_chauffeur
,tr.nom,tr.prenom,tr.telephone,tr.email,tr.r_s FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  
WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
ch.id_charg=chv.id_chargement and 
tr.telephone=ab.telephone AND ch.id_charg=".$now." ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();
//echo $empQuery;
while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"img_vehicule"=>$row['img_vehicule'],
            "id"=>$row['id'],
    		"type_vehicule"=>$row['type_vehicule'],
    		"id_abonnement"=>$row['id_abonnement'],
    		"matricule"=>$row['matricule'],
    		"type_vehicule"=>$row['type_vehicule'],
    		"marque"=>$row['marque'],
    		"poid_max"=>$row['poid_max'],
            "nom_chauffeur"=>$row['nom_chauffeur'],
    		"telephone_chauffeur"=>$row['telephone_chauffeur'],
            "nom"=>$row['nom'],
            "prenom"=>$row['prenom'],
            "telephone"=>$row['telephone'],
            "r_s"=>$row['r_s'],
            "email"=>$row['email']


    	);
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
