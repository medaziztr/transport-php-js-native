<?php
include('lib/functions.php');
header('content-type: application/json');


if($_SERVER['REQUEST_METHOD']=="GET")
{
  if(isset($_GET['id']))
  {
    $id =  $_GET['id'];
    $json = get_single_status_gps_info($id);
    if(empty($json))
    header("HTTP/1.1 404 Not Found");
    echo $json;
  }
  else{
    $json = get_all_status_gps_list();
    echo json_encode($json);
  }
}

?>