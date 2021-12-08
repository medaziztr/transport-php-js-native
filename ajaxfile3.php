<?php
include 'config1.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc

## Custom Field value
$pays3 = $_POST['pays3'];
$pays2 = $_POST['pays2'];
$villed= $_POST['villed'];
$villef= $_POST['villef'];
$dated= $_POST['dated'];
$datef= $_POST['datef'];
$telephone= $_POST['telephone'];


## Search 
$searchQuery = " ";
if($pays3 != ''){
    $searchQuery .= " and (pays_arr like '%".$pays3."%' ) ";
}
if($pays2 != ''){
    $searchQuery .= " and (pays_dep like '%".$pays2."%') ";
}
if($villed != ''){
    $searchQuery .= " and (ville_dep like '%".$villed."%') ";
}
if($villef != ''){
    $searchQuery .= " and (ville_arr like '%".$villef."%') ";
}

if($dated != ''){
    $searchQuery .= " and  STR_TO_DATE(abonnements. date_dep, '%d/%m/%Y')>='$dated' ";
}
if($datef != ''){
    $searchQuery .= " and STR_TO_DATE(abonnements. date_arr, '%d/%m/%Y')<='$datef' ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from disponibilite, abonnements  WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone='$telephone' ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from disponibilite, abonnements WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone='$telephone' ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from disponibilite, abonnements WHERE 1 AND disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone='$telephone' ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"img_vehicule"=>$row['img_vehicule'],
    		"ville_dep"=>$row['ville_dep'],
    		"date_dep"=>$row['date_dep'],
    		"ville_arr"=>$row['ville_arr'],
    		"date_arr"=>$row['date_arr'],
    		"pays_dep"=>$row['pays_dep'],
            "pays_arr"=>$row['pays_arr'],
    		"telephone"=>$row['telephone'],
            "matricule"=>$row['matricule'],
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
