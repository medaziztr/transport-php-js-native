<?php include"header.php" ?>

<?php
    $telephone=$_GET['telephone'];
    $today =   strtotime(date('d-m-Y')) ;
	
	$sql = "SELECT * FROM `transporteur` WHERE `telephone`='$telephone'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


    if ($row['type']=="transporteur"){
?>

    <section class="page-title-section trouvtrans">
        <div class="container hidden-xs slide-bord">
            <div class="demo-slides">
                <div class="animated lightSpeedIn slide-title">Historique de <?php echo $row['prenom'].' '.$row['nom']; ?></div>
                <p class="lead animated lightSpeedIn">Consultez l'historique de <?php echo $row['prenom'].' '.$row['nom']; ?></p>
            </div>
        </div>
    </section>



    <section class="contact-info-section">
        <div class="container ">

            <div class="row content-row">
                
                <div class="col-md-12">
                    <div class="contact-map">
                        <h3 class="txt-bordure sections-title">Historique Disponibilité</h3>
                        <?php
           
                            $selectSQL="SELECT * FROM disponibilite, abonnements WHERE disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone='$telephone'";

                            $resultat = mysqli_query($db,$selectSQL);
                            $res=mysqli_fetch_array($resultat);
                            $s=mysqli_num_rows($resultat);
                            
                            if($s>0){
                                do{
                                    $date_ar = $res["date_arr"];
									$date_ar_americain = str_replace('/', '-', $date_ar );
                                    $date_arr=strtotime($date_ar_americain) ;
                        ?>        
                                    
                                    <div class="cadre <?php if($date_arr>$today){ echo 'valide' ;} ?>">

                                        <div class="res-flx-s img-avatar-sm">
                                            <img src="./img/uploaded/<?php echo $res['img_vehicule']; ?>">
                                        </div>
                                        <div class="res-flx-s "><font style="text-transform: uppercase;"><?php echo $res['matricule']; ?></font></div>
                                        
                                        <div class="res-flx-s">Départ :  <?php echo $res['ville_dep'].", ".$res['pays_dep'].", ".$res['date_dep'] ; ?></div>
                                        
                                        <div class="res-flx-s">Arrivée : <?php echo $res['ville_arr'].", ".$res['pays_arr'].", ".$res['date_arr'] ; ?></div>
                                        
                                        <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-disp.php?id_disp=<?php echo $res['id_disp']; ?>"><img src="./img/supp.png" ></a>
                                    </div>
                        
                        <?php
                            
                                }
                                while($res=mysqli_fetch_array($resultat));
                            }
                            else{
                                echo "<p> ".$row['prenom']." ".$row['nom']." n'a rien dans son historique </p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    }
    if (($row['type']=="transporteur") OR ($row['type']=="client")){
?>
                
     <section class="contact-info-section">
        <div class="container ">

            <div class="row content-row">
                
                <div class="col-md-12">
                    <div class="contact-map">
                        <h3 class="txt-bordure sections-title">Historique Chargements</h3>
                        <?php
                            $selectSQL="SELECT * FROM chargement WHERE telephone='$telephone'";

                            $resultat = mysqli_query($db,$selectSQL);
                            $res=mysqli_fetch_array($resultat);
                            $s=mysqli_num_rows($resultat);
                            
                            if($s>0){
                                do{
                                    $date_liv = $res["date_liv"];
									$date_liv_americain = str_replace('/', '-', $date_liv );
                                    $date_livraison=strtotime($date_liv_americain);
                        ?>        
                                    
                                    <div class="cadre <?php if($date_livraison>$today){ echo 'valide' ;} ?>">

                                        <div class="res-flx-s img-avatar-sm">
                                            <img src="./img/uploaded/<?php echo $res['img_march']; ?>">
                                        </div>
                                        
                                        <div class="res-flx-s "><?php echo $res['marchandise']; ?></div>
                                        <div class="res-flx-s "><?php echo $res['poid']; ?></div>
                                        <div class="res-flx-s "><?php echo $res['volume']; ?></div>
                                        
                                        <div class="res-flx-s">Départ :<?php echo $res['ville_charg'].", ".$res['pays_charg'].", ".$res['date_charg'] ; ?></div>
                                        
                                        <div class="res-flx-s">Arrivée:<?php echo $res['ville_liv'].", ".$res['pays_liv'].", ".$res['date_liv'] ; ?></div>
                                        
                                        <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-charg.php?id_charg=<?php echo $res['id_charg']; ?>"><img src="./img/supp.png" ></a>
                                    </div>
                        
                        <?php
                            
                                }
                                while($res=mysqli_fetch_array($resultat));
                            }
                            else{
                                echo "<p> ".$row['prenom']." ".$row['nom']." n'a rien dans son historique </p>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>           
                
                
<?php } ?>

<?php include"footer.php" ?>