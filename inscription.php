<?php
   include("config.php");
   session_start();
   
   
   
	/********************************* Mail Code Verification -V1- ********************************/
   	/*
	$chars = "abcdefghijkmnopqrstuvwxyz023456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
	srand((double)microtime()*1000000); 
    $i = 0; 
    $code = '' ; 

    while ($i < 10) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $code = $code . $tmp; 
        $i++; 
    }
	*/

	/************************** Phone Code Verification **************************************/
	
	$code = '' ; 
	$i=0;
	
    while ($i < 4) {
        $num = rand(0,9); 
        $code = $code.$num; 
        $i++; 
    }
	
	/***************************************************************************************/
	

    if (empty($_POST['r_s'])){
        $r_s =" ";
    }
    else{
        $r_s = $_POST['r_s'];
    }
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pays = $_POST['pays'];
    $adresse = $_POST['adresse'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];
    $passwd = $_POST['passwd'];
    $genre = $_POST['genre'];
    $type = $_POST['type'];
    
    $date_limite = date('d/m/Y', strtotime("1 month"));

	$verif_inscription= substr($telephone, 0, 5);
	
	if ( ($verif_inscription=="00237") OR ($verif_inscription=="00242") OR ($verif_inscription=="00241") OR ($verif_inscription=="00235") OR ($verif_inscription=="00236") OR ($verif_inscription=="00240") ){ 

    echo $insertSQL ="INSERT INTO transporteur (`nom`, `prenom`, `r_s`, `pays`, `adresse`, `telephone`, `email`, `password` , `genre`, `type`, `date_limite`,`note`, `nb_note`,`total_note` , `verif`, `code` ) VALUES ('$nom', '$prenom', '$r_s', '$pays', '$adresse', '$telephone', '$mail', '$passwd', '$genre', '$type', '$date_limite', 0, 0, 0, 0, '$code')";
    $result = mysqli_query($db,$insertSQL);
    
	/**************************************** Verification par Phone ****************************************/
	$phonemsg=substr($telephone,2);
	$data = "";
	$ch = curl_init('https://api.1s2u.io/bulksms?username=smscontact020&password=web89355&mt=0&fl=0&sid=Telefret&mno='.$phonemsg.'&msg=code%20'.$code);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	
	//echo $result;
	
	/*******************************************************************************************************/
	
	/**************************************** Verification par Mail ****************************************/
	if(isset($_POST[$mail])){
	$msg = "Cliquez sur le lien pour activer votre compte :" . "\r\n" ." www.telefret.com/verify.php?code=".$code;
	
	$subject = "Verification de compte";
	
	$headers = 'From: noreplay@telefret.com' . "\r\n" .
	'Reply-To:  noreplay@telefret.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	mail($mail, $subject, $msg, $headers);
	}
	/******************************************************************************************************/
	
	header("location: index.php");
	}
	else{
		header("location: index.php");
	}
?> 