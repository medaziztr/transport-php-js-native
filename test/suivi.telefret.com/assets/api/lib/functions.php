<?php
include 'database.php';

function get_single_status_gps_info($id)
{
    $pdo = Database::connect();
    $sql = "SELECT * FROM status_gps where id_dispo = {$id} and Etat=0 ";
  

    $token = null;
    $headers = apache_request_headers();
    if(isset($headers['Authorization'])){
     
        $token =$headers['Authorization'];
        try {

            $query = $pdo->prepare($sql);
            $query->execute();
            $val = $query->fetchAll(PDO::FETCH_ASSOC);
    
    
            $url = "http://fleet.tn/ws_rimtrack_all/realTimeRecords/". $val[0]['ID_gps'];
    
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            
            $headers = array(
               "Accept: application/json",
               "Authorization: ".$token,
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            //for debug only!
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            
            $resp = curl_exec($curl);
            $status_gps_info= $resp ;
        } catch (PDOException $e) {
    
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    } 
 

  

    Database::disconnect();
    return $status_gps_info;
}
function get_all_status_gps_list()
{
    $pdo = Database::connect();
    $sql = "SELECT * FROM status_gps";

    try {

        $query = $pdo->prepare($sql);
        $query->execute();
        $all_status_gps_info = $query->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {

        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    Database::disconnect();
    return $all_status_gps_info;
}
