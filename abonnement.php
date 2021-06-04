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
                
                <div class="col-md-12">
                    <div class="contact-map">
                        <h3 class="txt-bordure sections-title">Vos Abonnements</h3>
                        <?php
                            $telephone=$_SESSION['telephone'];
            
                            $selectSQL="SELECT * FROM abonnements WHERE telephone='$telephone'";

                            $resultat = mysqli_query($db,$selectSQL);
                            $res=mysqli_fetch_array($resultat);
                            $s=mysqli_num_rows($resultat);
                            
                            if($s>0){
                                do{
                        ?>        
                            
                                    <div class="cadre <?php if($res['valide']==1){ echo 'valide' ;} ?>">

                                        <div class="res-flx-s img-avatar-sm">
                                            <img src="./img/uploaded/<?php echo $res['img_vehicule']; ?>">
                                        </div>
                                        <div class="res-flx-s "><font style="text-transform: uppercase;"><?php echo $res['matricule']; ?></font></div>
                                        <div class="res-flx-s "><?php echo $res['marque']; ?></div>
                                        <div class="res-flx-s "><?php echo $res['type_vehicule']; ?></div>
                                        <div class="res-flx-s "><?php echo $res['poid_max'].' Tonnes'; ?></div>
                                        <div class="res-flx-s "><?php if ($res['gps']==1){ echo 'Avec GPS' ; } else {echo 'Sans GPS' ; } ?></div>
                                        <?php if($res['valide']==1){ ?>
                                            <div class="res-flx-s">Du <?php echo $res['date_deb']; ?> Au <?php echo $res['date_fin']; ?> </div>
                                        <?php }
                                        else { ?>
                                            <div class="res-flx-s">Pas encore Validé</div>
                                        <?php } ?>
                                    </div>
                        
                        <?php
                            
                                }
                                while($res=mysqli_fetch_array($resultat));
                            }
                            else{
                                echo "<p> Vous n'avez encore aucun abonnement validé! </p>";						
                                    if ( $_SESSION['date_limite'] > strtotime(date('d-m-Y')) ) {  
                                        echo " <h4> <span class='vert'> Vous avez un abonnement gratuit, valider ci-dessous. </span></h4>";
                                    } 
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-12 m-t-50">
                    <div class="contact-map">
                        <h3 class="txt-bordure sections-title">Ajoutez un abonnement</h3>
                        
                        <form id="new_abnmt" action="new_abnmt.php" method="POST" name="new_abnmt" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12 no-padding margb">
                                        <div class="col-sm-2 col-xs-12  left-title p-l-0 hidden-xs">Image du Véhicule</div>
                                        <div class="add-img col-sm-10 col-xs-12 no-padding previmg">
                                            <input id="file" type="file" class="input-file" name="avat" required="" onchange="readURL(this);">
                                            <label for="file" class="label-file"><span class="plus">+</span></label>
                                            <div class="imgs-prev">
                                                <img  id="blah" src="./img/contact-back.png" alt="your image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 m-t-lg no-padding">
                                        <div class="cont-filtre flxstart">
                                            <span class="m-t-sm" >GPS</span>
                                            <div class="onoffswitch ">
                                                <input type="checkbox" name="gps" class="onoffswitch-checkbox" id="myonoffswitch3">
                                                <label class="onoffswitch-label" for="myonoffswitch3">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="matricule" type="text" class="form-control" required="" placeholder="Matricule de Véhicule"> 
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="marque" type="text" class="form-control" required="" placeholder="Marque de Véhicule">
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <select class="form-control" id="" name="type_vehicule"> 
										    <option value="null">sélectionnez le type de vehicule</option>
                                            <option value="Fourgon">Fourgon</option>
                                            <option value="Plateau">Plateau</option>
                                            <option value="Benne">Benne</option>
                                            <option value="Citerne">Citerne</option>
                                            <option value="Frigorifique">Frigorifique</option>
                                            <option value="Carrosseries">Carrosseries</option>
                                            <option value="Grumier">Grumier</option>
                                            <option value="Porte Conteneur">Porte Conteneur</option>
                                            <option value="Porte Engin">Porte Engin</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 no-padding">
                                        <input name="poid_max" type="number" class="form-control" placeholder="Poids Maximal en tonne" required="">
                                    </div>
                                    <?php
										if( ($s>0) OR (($s==0) AND ($_SESSION['date_limite'] < strtotime(date('d-m-Y')))) ){
									?>
										<div class="col-md-12 no-padding">
											<select class="form-control" id="" name="pack"> 
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
    </section>

<?php } ?>
<?php include"footer.php" ?>