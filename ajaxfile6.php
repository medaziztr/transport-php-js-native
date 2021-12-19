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

  $client="";
  if (isset($_POST['client'])) {
      $client= " or transporteur.type='transporteur' ";
    }
    $transporteur="";
    if (isset($_POST['transporteur'])) {
        $transporteur= " or transporteur.type='client' ";
      }

## Search 
$searchQuery = " ";


if($dated != ''){
    $searchQuery .= " and  STR_TO_DATE( Date_inscri, '%d/%m/%Y')>='$dated' ";
}
if($datef != ''){
    $searchQuery .= " and STR_TO_DATE( Date_inscri, '%d/%m/%Y')<='$datef' ";
}

if($searchValue != ''){
    $searchQuery .= " and (
    transporteur.nom like '%".$searchValue."%' or 
    transporteur.prenom like '%".$searchValue."%' or 
    transporteur.adresse like'%".$searchValue."%' or
    transporteur.telephone like '%".$searchValue."%' or 
    transporteur.email like '%".$searchValue."%' or 
    transporteur.Date_inscri like'%".$searchValue."%' or
    transporteur.verif like '%".$searchValue."%' or 
    transporteur.code like '%".$searchValue."%'
    ) ";
}
## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from `transporteur`   WHERE ( 0 ".$client." ".$transporteur." ) ".$now." ");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from  `transporteur`   WHERE ( 0 ".$client." ".$transporteur.")  ".$now." ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from  `transporteur`   WHERE ( 0 ".$client." ".$transporteur.") ".$now." ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
        "r_s"=>$row['r_s'],
    		"nom"=>$row['nom'],
            "prenom"=>$row['prenom'],
    		"pays"=>$row['pays'],
    		"adresse"=>$row['adresse'],
    		"telephone"=>$row['telephone'],
            "email"=>$row['email'],
            "Date_inscri"=>$row['Date_inscri'],
            "verif"=>$row['verif'],
            "code"=>$row['code']



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
