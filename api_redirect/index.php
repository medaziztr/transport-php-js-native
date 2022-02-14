﻿<?php
include('lib/functions.php');

header('content-type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

if($_SERVER['REQUEST_METHOD']=="GET")
{
  if(isset($_GET['id'])&&isset($_GET['token']))
  {
    $id =  $_GET['id'];
    $token=$_GET['token'];
    $json = get_single_status_gps_info($id,$token);
    if(empty($json)){
    header("HTTP/1.1 404 Not Found");
    echo json_encode("Impossible de tracker cet element!");
  }else
    echo $json; 
   }
   if(isset($_GET['lat'])&&isset($_GET['lon']))
   {
     $lon =  $_GET['lon'];
     $lat =  $_GET['lat'];
     $json = get_single_reverse_info($lon,$lat);
    
     echo $json; 
    
 }
  else  if(isset($_GET['all'])){
    $json = get_all_status_gps_list();
    echo json_encode($json);
  }
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
  $data = json_decode( file_get_contents( 'php://input' ), true );
  
  // $name = $data['name'];
  // $email = $data['email'];
  
   $json = login_user_info($data);
  echo $json;
}

?>