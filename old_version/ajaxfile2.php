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
$dated= $_POST['dated'];
$datef= $_POST['datef'];


## Search 
$searchQuery = " ";
if($pays3 != ''){
    $searchQuery .= " and (pays_liv like '%".$pays3."%' ) ";
}
if($pays2 != ''){
    $searchQuery .= " and (pays_charg like '%".$pays2."%') ";
}
if($villed != ''){
    $searchQuery .= " and (ville_charg like '%".$villed."%') ";
}
if($villef != ''){
    $searchQuery .= " and (ville_liv like '%".$villef."%') ";
}

if($dated != ''){
    $searchQuery .= " and  STR_TO_DATE(chargement. date_charg, '%d/%m/%Y')>='$dated' ";
}
if($datef != ''){
    $searchQuery .= " and STR_TO_DATE(chargement. date_liv, '%d/%m/%Y')<='$datef' ";
}
if($searchValue != ''){
	$searchQuery .= " and (
        chargement.marchandise like '%".$searchValue."%' or 
        chargement.img_march like '%".$searchValue."%' or 
        chargement.poid like'%".$searchValue."%' or
        chargement.prix_prop like '%".$searchValue."%' or 
        chargement.ville_charg like '%".$searchValue."%' or 
        chargement.date_charg like'%".$searchValue."%' or
        chargement.ville_liv like '%".$searchValue."%' or 
        chargement.date_liv like '%".$searchValue."%' or 
        chargement.pays_charg like'%".$searchValue."%' or
        chargement.pays_liv like '%".$searchValue."%' or 
        chargement.id_charg like '%".$searchValue."%' or 
        chargement.telephone like'%".$searchValue."%' 
        ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from chargement, transporteur     WHERE 1  and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= NOW()");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from chargement, transporteur     WHERE 1  and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= NOW() ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from chargement, transporteur     WHERE 1  and chargement.telephone=transporteur.telephone and  STR_TO_DATE(chargement. date_liv, '%d/%m/%Y') >= NOW() ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
        "marchandise"=>$row['marchandise'],
    		"img_march"=>$row['img_march'],
            "poid"=>$row['poid'],
    		"prix_prop"=>$row['prix_prop'],
    		"ville_charg"=>$row['ville_charg'],
    		"date_charg"=>$row['date_charg'],
    		"ville_liv"=>$row['ville_liv'],
    		"date_liv"=>$row['date_liv'],
    		"pays_charg"=>$row['pays_charg'],
            "pays_liv"=>$row['pays_liv'],
    		"id_charg"=>$row['id_charg'],
            "nb_vehicules"=>$row['nb_vehicules'],
    		"telephone"=>$row['telephone']

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
