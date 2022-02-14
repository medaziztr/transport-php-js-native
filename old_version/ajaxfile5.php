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
// $pays3 = $_POST['pays3'];
// $pays2 = $_POST['pays2'];
// $villed= $_POST['villed'];
// $villef= $_POST['villef'];
$dated=$_POST['dated'];
$datef= $_POST['datef'];
$now="";
if (isset($_POST['now'])) {
    $now= "and  STR_TO_DATE( date_fin, '%d/%m/%Y') >= NOW() ";
  }

## Search 
$searchQuery = " ";


if($dated != ''){
    $searchQuery .= " and  STR_TO_DATE( date_deb, '%d/%m/%Y')>='$dated' ";
}
if($datef != ''){
    $searchQuery .= " and STR_TO_DATE( date_fin, '%d/%m/%Y')<='$datef' ";
}


if($searchValue != ''){
	$searchQuery .= " and (
        abonnements.img_vehicule like '%".$searchValue."%' or 
        abonnements.marque like '%".$searchValue."%' or 
        abonnements.type_vehicule like'%".$searchValue."%' or
        abonnements.date_deb like '%".$searchValue."%' or 
        abonnements.date_fin like '%".$searchValue."%' or 
        abonnements.telephone like'%".$searchValue."%' or
        abonnements.matricule like '%".$searchValue."%' or 
        abonnements.poid_max like '%".$searchValue."%' or 
        transporteur.nom like'%".$searchValue."%' or
        abonnements.valide like '%".$searchValue."%' or 
        abonnements.id_abonnement like '%".$searchValue."%' or 
        abonnements.gps like'%".$searchValue."%' 
        ) ";
}
## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from `transporteur`, `abonnements`   WHERE abonnements.telephone=transporteur.telephone  ".$now." ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from `transporteur`, `abonnements`   WHERE abonnements.telephone=transporteur.telephone  ".$now." ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from `transporteur`, `abonnements`   WHERE abonnements.telephone=transporteur.telephone ".$now." ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"img_vehicule"=>$row['img_vehicule'],
            "marque"=>$row['marque'],
    		"type_vehicule"=>$row['type_vehicule'],
    		"date_deb"=>$row['date_deb'],
    		"date_fin"=>$row['date_fin'],
    		"telephone"=>$row['telephone'],
            "matricule"=>$row['matricule'],
            "poid_max"=>$row['poid_max'],
            "nom"=>$row['nom'],
            "valide"=>$row['valide'],
            "id_abonnement"=>$row['id_abonnement'],
            "gps"=>$row['gps']


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
