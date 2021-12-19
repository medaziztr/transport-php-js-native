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
$pays3 = $_POST['pays3'];
$pays2 = $_POST['pays2'];
$villed= $_POST['villed'];
$villef= $_POST['villef'];
$dated='' ;
// $_POST['dated'];
$datef='' ;
// $_POST['datef'];
$now="";
if (isset($_POST['now'])) {
    $now= "and  STR_TO_DATE( disponibilite.date_arr, '%d/%m/%Y') >= NOW() ";
  }

## Search 
$searchQuery = " ";
if($pays3 != ''){
    $searchQuery .= " and (disponibilite.pays_arr like '%".$pays3."%' ) ";
}
if($pays2 != ''){
    $searchQuery .= " and (disponibilite.pays_dep like '%".$pays2."%') ";
}
if($villed != ''){
    $searchQuery .= " and (disponibilite.ville_dep like '%".$villed."%') ";
}
if($villef != ''){
    $searchQuery .= " and (disponibilite.ville_arr like '%".$villef."%') ";
}

if($dated != ''){
    $searchQuery .= " and  STR_TO_DATE( disponibilite.date_dep, '%d/%m/%Y')>='$dated' ";
}
if($datef != ''){
    $searchQuery .= " and STR_TO_DATE( disponibilite.date_arr, '%d/%m/%Y')<='$datef' ";
}

if($searchValue != ''){
	$searchQuery .= " and (
        abonnements.img_vehicule like '%".$searchValue."%' or 
        disponibilite.poid_disp like '%".$searchValue."%' or 
        abonnements.type_vehicule like'%".$searchValue."%' or
        disponibilite.ville_dep like '%".$searchValue."%' or 
        disponibilite.date_dep like '%".$searchValue."%' or 
        disponibilite.ville_arr like'%".$searchValue."%' or
        disponibilite.date_arr like '%".$searchValue."%' or 
        disponibilite.pays_dep like '%".$searchValue."%' or 
        abonnements.telephone like'%".$searchValue."%' or
        abonnements.matricule like '%".$searchValue."%' or 
        transporteur.genre like '%".$searchValue."%' or 
        transporteur.nom like'%".$searchValue."%' 
        ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from disponibilite, transporteur, abonnements    WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone=transporteur.telephone  ".$now." ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from disponibilite, transporteur, abonnements   WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone=transporteur.telephone  ".$now." ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from disponibilite, transporteur, abonnements   WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone=transporteur.telephone ".$now." ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"img_vehicule"=>$row['img_vehicule'],
            "poid_disp"=>$row['poid_disp'],
    		"type_vehicule"=>$row['type_vehicule'],
    		"ville_dep"=>$row['ville_dep'],
    		"date_dep"=>$row['date_dep'],
    		"ville_arr"=>$row['ville_arr'],
    		"date_arr"=>$row['date_arr'],
    		"pays_dep"=>$row['pays_dep'],
            "pays_arr"=>$row['pays_arr'],
    		"telephone"=>$row['telephone'],
            "matricule"=>$row['matricule'],
            "genre"=>$row['genre'],
            "nom"=>$row['nom'],

            "id_disp"=>$row['id_disp']


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
