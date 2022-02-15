<?php include"header.php" ?>

    <?php
        if ($_SESSION['type']=="transporteur"){
    ?>

    <section class="page-title-section trouvtrans">
        <div class="container hidden-xs slide-bord">
            <div class="demo-slides">
                <div class="animated lightSpeedIn slide-title">Vos Abonnements</div>
                <p class="lead animated lightSpeedIn">Consultez ou abonnez-vous</p>
            </div>
        </div>
    </section>


    <section class="contact-info-section">
        <div class="container ">

            <div class="row content-row">
            
                <div class="col-md-12 m-t-50">
                    <div class="contact-map">
                        <h3 class="txt-bordure sections-title">Modifier un Vehicule</h3>
                        <?php 
	$id_abonnement=$_GET["id_abonnement"];

	$telephone=$_SESSION['login_user'];
	

		
		$selectSQL="SELECT * FROM abonnements WHERE id_abonnement='$id_abonnement'";
		$resultat = mysqli_query($db,$selectSQL);
		$res=mysqli_fetch_array($resultat);
		$s=mysqli_num_rows($resultat);
		
		
?>
                        <form id="update_abnmt" action="update_abnmt.php" method="POST" name="update_abnmt" enctype="multipart/form-data">
                        <input  value="<?php echo $res['id_abonnement']; ?>" name="id_abonnement" class="hidden" id="id_abonnement">
                        <input  value="<?php echo $res['img_vehicule']; ?>" name="old_image" class="hidden" id="id_abonnement">
                        <input  value="<?php echo $res['carte_grise']; ?>" name="old_image1" class="hidden" id="id_abonnement">
                        <input  value="<?php echo $res['assurance']; ?>" name="old_image2" class="hidden" id="id_abonnement">
                        <input  value="<?php echo $res['cni']; ?>" name="old_image3" class="hidden" id="id_abonnement">

                            <div class="form-group">
                                <div class="row">
                                  
                                    <div class="row">
                                    <div class="col-md-3 no-padding margb">
                                        <div class="col-md-12  left-title p-l-0 hidden-xs">Image du Véhicule</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file" type="file" class="input-file" name="avat"  onchange="readURL(this);">
                                            <label for="file" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah" src="<?php echo $res['img_vehicule']!=""? './img/uploaded/'.$res['img_vehicule']:'./img/contact-back.png'; ?>" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 no-padding margb">
                                        <div class="col-md-12  left-title p-l-0 hidden-xs">Carte grise</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file1" type="file" class="input-file" name="avat1"  onchange="readURLC1(this);">
                                            <label for="file1" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah1" src="<?php echo $res['carte_grise']!=""? './img/uploaded/'.$res['carte_grise']:'./img/contact-back.png'; ?>" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 no-padding margb">
                                        <div class="col-md-12  left-title p-l-0 hidden-xs">Assurance valide</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file2" type="file" class="input-file" name="avat2"  onchange="readURLC2(this);">
                                            <label for="file2" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah2" src="<?php echo $res['assurance']!=""? './img/uploaded/'.$res['assurance']:'./img/contact-back.png'; ?>" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 no-padding margb">
                                        <div class="col-md-12  left-title p-l-0 hidden-xs">CNI du gerant</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file3" type="file" class="input-file" name="avat3"  onchange="readURLC3(this);">
                                            <label for="file3" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah3" src="<?php echo $res['cni']!=""? './img/uploaded/'.$res['cni']:'./img/contact-back.png'; ?>" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </br>
                                    </br>


                                    <div class="col-md-12 m-t-lg no-padding">
                                        <div class="cont-filtre flxstart">
                                            <span class="m-t-sm" >GPS</span>
                                            <div class="onoffswitch ">
                                                <input type="checkbox" value="<?php echo $res['gps']; ?>" name="gps" class="onoffswitch-checkbox" id="myonoffswitch3">
                                                <label class="onoffswitch-label" for="myonoffswitch3">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="matricule" value="<?php echo $res['matricule']; ?>" type="text" class="form-control" required="" placeholder="Matricule de Véhicule"> 
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="marque" value="<?php echo $res['marque']; ?>" type="text" class="form-control" required="" placeholder="Marque de Véhicule">
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <select class="form-control" id="" name="type_vehicule"
                                        value="<?php echo $res['type_vehicule']; ?>"> 
										    <option value="null" <?php if($res['type_vehicule']=='null') echo "selected" ?>>sélectionnez le type de vehicule</option>
                                            <option value="Fourgon" <?php if($res['type_vehicule']=='Fourgon') echo "selected" ?>>Fourgon</option>
                                            <option value="Plateau" <?php if($res['type_vehicule']=='Plateau') echo "selected" ?>>Plateau</option>
                                            <option value="Benne" <?php if($res['type_vehicule']=='Benne') echo "selected" ?>>Benne</option>
                                            <option value="Citerne" <?php if($res['type_vehicule']=='Citerne') echo "selected" ?>>Citerne</option>
                                            <option value="Frigorifique" <?php if($res['type_vehicule']=='Frigorifique') echo "selected" ?>>Frigorifique</option>
                                            <option value="Carrosseries" <?php if($res['type_vehicule']=='Carrosseries') echo "selected" ?>>Carrosseries</option>
                                            <option value="Grumier" <?php if($res['type_vehicule']=='Grumier') echo "selected" ?>>Grumier</option>
                                            <option value="Porte Conteneur" <?php if($res['type_vehicule']=='Porte Conteneur') echo "selected" ?>>Porte Conteneur</option>
                                            <option value="Porte Engin" <?php if($res['type_vehicule']=='Porte Engin') echo "selected" ?>>Porte Engin</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="poid_max"  value="<?php echo $res['poid_max']; ?>" type="number" class="form-control" placeholder="Poids Maximal en tonne" required="">
                                    </div>
                                 
                                    <div class="col-md-12 no-padding">
                                        <input name="nom_chauffeur"  value="<?php echo $res['nom_chauffeur']; ?>" type="text" class="form-control" required="" placeholder="Nom et prénom du chauffeur"> 
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="telephone_chauffeur"  value="<?php echo $res['telephone_chauffeur']; ?>" type="text" class="form-control" required="" placeholder="téléphone du chauffeur">
                                    </div>
                                    
                                    <?php
										if( ($s>0) OR (($s==0) AND ($_SESSION['date_limite'] < strtotime(date('d-m-Y')))) ){
									?>
										<div class="col-md-12 no-padding">
											<select class="form-control" id="pack"  name="pack"> 
												<option value="1 year">Pack 1 Ans</option>
												<option value="6 months">Pack 6 Mois</option>
												<option value="3 months">Pack 3 Mois</option>
											</select>
										</div>
									<?php
										}
									?>
                                </div>
                            </div>
                         
                            <button type="submit" class="btn btn-primary pull-right">ENVOYER</button>
                            
                        </form>
                    </div>
                </div>

                
            </div>
        </div>
        <div >
                                                                    <div > 
                                                                    
              
                           
  
                      
                            
                          
    </section>

<?php } ?>
<?php include"footer.php" ?>