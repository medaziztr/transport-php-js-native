<?php include"header.php"?>

    <section class="page-title-section trouvtrans">
        <div class="container hidden-xs slide-bord">
            <div class="demo-slides">
                <div class="animated lightSpeedIn slide-title">Votre historique</div>
                <p class="lead animated lightSpeedIn">Consultez Votre historique</p>
            </div>
        </div>
    </section>
	
<?php 
	$id_charg=$_GET["id_charg"];

	$telephone=$_SESSION['login_user'];
	
	if (($_SESSION['type']=="client") OR ($_SESSION['type']=="transporteur")){
		
		$selectSQL="SELECT * FROM chargement WHERE id_charg='$id_charg'";
		$resultat = mysqli_query($db,$selectSQL);
		$res=mysqli_fetch_array($resultat);
		$s=mysqli_num_rows($resultat);
		
		$date_charg_americain = str_replace('/', '-', $res["date_charg"] );
		$date_charg_americain = date("Y-m-d", strtotime($date_charg_americain));
		
		$date_liv_americain = str_replace('/', '-', $res['date_liv'] );
		$date_liv_americain = date("Y-m-d", strtotime($date_liv_americain));
		
?>
<section class="contact-info-section">
	<div class="container ">
		<form id="form1" enctype="multipart/form-data" action="update-charg.php?id_charg=<?php echo $id_charg ?>&amp;telephone=<?php echo $res['telephone'] ?>" method="POST">
		
                                            <div class="container">
                                                <div class="col-md-8 col-xs-12 formulaire">
                                                    <h3 class="txt-bordure sections-title">INFORMATIONS GÉNÉRALES</h3>

                                                    <div class="form-group">
                                                    <div class="row">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Nom du client </div>
                                                            
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <input type="text" name="client" class="col-xs-12" value=<?php echo $res['client'] ?>>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Téléphone client </div>
                                                            
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <input type="number" name="telephoneclient" class="col-xs-12" value=<?php echo $res['telephoneclient'] ?>>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                                de Marchandise </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <select class="form-control" id="marchandise" name="marchandise"
                                                                    required>
																	<option value="Demenagement"<?php if($res['marchandise']=='Demenagement') echo "selected" ?>>Demenagement</option>
									<option value="Produit alimentaires"<?php if($res['marchandise']=='Produit alimentaires') echo "selected" ?>>Produit alimentaires</option>
									<option value="Materiaux De Construction"<?php if($res['marchandise']=='Materiaux De Construction') echo "selected" ?>>Materiaux De Construction</option>
									<option value="Carburant & Gaz"<?php if($res['marchandise']=='Carburant & Gaz') echo "selected" ?>>Carburant & Gaz</option>
									<option value="Vehicules"<?php if($res['marchandise']=='Vehicules') echo "selected" ?>>Vehicules</option>
									<option value="Produits Agricoles "<?php if($res['marchandise']=='Produits Agricoles') echo "selected" ?>>Produits Agricoles </option>
									<option value="Boissons"<?php if($res['marchandise']=='Boissons') echo "selected" ?>>Boissons</option>
									<option value="Produits Chimiques"<?php if($res['marchandise']=='Produits Chimiques') echo "selected" ?>>Produits Chimiques</option>
									<option value="Meubles"<?php if($res['marchandise']=='Meubles') echo "selected" ?>>Meubles</option>
									<option value="Materiaux Lourds"<?php if($res['marchandise']=='Materiaux Lourds') echo "selected" ?>>Materiaux Lourds</option>
									<option value="Produits Medicaux"<?php if($res['marchandise']=='Produits Medicaux') echo "selected" ?>>Produits Medicaux</option>
									<option value="Materiels industriel"<?php if($res['marchandise']=='Materiels industriel') echo "selected" ?>>Materiels industriel</option>
									<option value="Agregats"<?php if($res['marchandise']=='Agregats') echo "selected" ?>>Agregats</option>
									<option value="Grumes & Bois"<?php if($res['marchandise']=='Grumes & Bois') echo "selected" ?>>Grumes & Bois</option>
									<option value="Divers marchandises"<?php if($res['marchandise']=='Divers marchandises') echo "selected" ?>>Divers marchandises</option>
									<option value="Autres"<?php if($res['marchandise']=='Autres') echo "selected" ?>>Autres</option>
									


                                                                </select>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding" id="othervalue" style='display: none'>
                                                                <input type="text" name="marchandise1" class="col-xs-12" value=<?php echo $res['marchandise'] ?>>
                                                            </div>
                                                        </div>

                                                        <div class="row" hidden>
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                                d'emballage </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <select class="form-control" id="" name="emballage"
                                                                    required>
																	<option value="Cartons"<?php if($res['emballage']=='Cartons') echo "selected" ?>>Cartons</option>
									<option value="Palettes"<?php if($res['emballage']=='Palettes') echo "selected" ?>>Palettes</option>
									<option value="Sacs"<?php if($res['emballage']=='Sacs') echo "selected" ?>>Sacs</option>
									<option value="Ballots"<?php if($res['emballage']=='Ballots') echo "selected" ?>>Ballots</option>
									<option value="Bidons"<?php if($res['emballage']=='Bidons') echo "selected" ?>>Bidons</option>
									<option value="Caisses"<?php if($res['emballage']=='Caisses') echo "selected" ?>>Caisses</option>
									<option value="Sceaux"<?php if($res['emballage']=='Sceaux') echo "selected" ?>>Sceaux</option>
									<option value="Citerne"<?php if($res['emballage']=='Citerne') echo "selected" ?>>Citerne</option>
									<option value="Bonbonnes"<?php if($res['emballage']=='Bonbonnes') echo "selected" ?>>Bonbonnes</option>
									<option value="Futs"<?php if($res['emballage']=='Futs') echo "selected" ?>>Futs</option>
									<option value="Conteneur 20’"<?php if($res['emballage']=='Conteneur 20’') echo "selected" ?>>Conteneur 20’</option>
									<option value="Conteneur 40’"<?php if($res['emballage']=='Conteneur 40’') echo "selected’" ?>>Conteneur 40’</option>
									<option value="Colis"<?php if($res['emballage']=='Colis') echo "selected" ?>>Colis</option>
									<option value="Bouteilles"<?php if($res['emballage']=='Bouteilles') echo "selected" ?>>Bouteilles</option>
									<option value="Autres"<?php if($res['emballage']=='Autres') echo "selected" ?>>Autres</option>
							
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row" hidden>
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Nombre de Colis</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
															<input type="number" name="nb_colis" class="col-xs-12" value=<?php echo $res['nb_colis'] ?>>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="row" hidden>
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                                de vehicule </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <select class="form-control" name="type_vehicule"
                                                                    size="1" id="vehicule"
                                                                    onChange="changecat(this.value);">
																	<option value="Fourgon"<?php if($res['type_vehicule']=='Fourgon') echo "selected" ?>>Fourgon</option>
									<option value="plateau"<?php if($res['type_vehicule']=='plateau') echo "selected" ?>>Plateau</option>
									<option value="Benne"<?php if($res['type_vehicule']=='Benne') echo "selected" ?>>Benne</option>
									<option value="citerne"<?php if($res['type_vehicule']=='citerne') echo "selected" ?>>Citerne</option>
									<option value="frigorifique"<?php if($res['type_vehicule']=='frigorifique') echo "selected" ?>>Frigorifique</option>
									<option value="carrosserie"<?php if($res['type_vehicule']=='carrosserie') echo "selected" ?>>Carrosseries</option>
									<option value="portechar"<?php if($res['type_vehicule']=='portechar') echo "selected" ?>>Porte char</option>
									
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row" hidden>
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">
                                                                Tonnage </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <select class="form-control" name="poid" id="Poid">
                                                                    <option value="" disabled selected>Tonnage</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row" hidden>
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Nombre de véhicules</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <input type="number" name="nb_vehicules" value=<?php echo $res['nb_vehicules']; ?> class="col-xs-12" >
                                                            </div>
                                                        </div>
                                                        <!-- <div class="row">
														 <div class="col-sm-3 col-xs-12 no-padding left-title">Mode de Transport </div>
														<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
														<div class="col-sm-5 col-xs-12 no-padding">
															<select class="form-control" id="" name="mode_t" required> 
																<option value="Transport routier">Transport routier</option>
																<option value="Maritime">Maritime</option>
																<option value="Ferroviaire">Ferroviaire</option>
																<option value="Aerien">Aerien</option>
															</select>
														</div>
													</div> -->

                                                        <!-- <div class="row">
														 <div class="col-sm-3 col-xs-12  no-padding left-title">Poids (T) </div>
														<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
														<div class="col-sm-5 col-xs-12 no-padding">
															<input type="number" name="poid" class="col-xs-12" required>
														</div> 
													</div> -->



                                                        <!-- <div class="row">
														 <div class="col-sm-3 col-xs-12  no-padding left-title">Volume(m3)</div>
														<div class="col-sm-1 hidden-xs no-padding left-title"></div>
														<div class="col-sm-5 col-xs-12 no-padding">
															<input type="text" name="volume" class="col-xs-12">
														</div>
													</div> -->

                                                        <!-- <div class="row">
														<div class="col-sm-3 col-xs-12 no-padding left-title">Type de Vehicule </div>
														<div class="col-sm-1 hidden-xs no-padding left-title"></div>
														<div class="col-sm-5 col-xs-12 no-padding">
															<select class="form-control" id="" name="type_vehicule">
																<option value="Tout type">Tout type de Vehicule</option> 
																<option value="Fourgon">Fourgon</option>
																<option value="Plateau">Plateau</option>
																<option value="Benne">Benne</option>
																<option value="Citerne">Citerne</option>
																<option value="Frigorifique">Frigorifique</option>
																<option value="Carrosseries">Carrosseries</option>
																<option value="Grumier">Grumier</option>
																<option value="Porte Conteneur">Porte Conteneur</option>
																<option value="Porte Engin">Porte Engin</option>
																<option value="Camion Yap">Camion Yap</option>
																<option value="Tricycle Moto">Tricycle Moto</option>
															</select>
														</div>
													</div> -->

                                                        <div class="row" hidden>
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Details de Marchandise</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <textarea
                                                                    placeholder="Plus de details sur votre marchandise"
                                                                    name="details_march" required><?php echo $res['adresse_charg'] ?></textarea>
                                                                <div class="conseil">Conseil : Donnez le maximum
                                                                    d’information pour eviter les surprises</div>
                                                            </div>
                                                        </div>

                                                        <div class="row margt" hidden>
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">Image
                                                                Marchandise</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="add-img col-sm-7 col-xs-12 no-padding previmg">
															<input  value="<?php echo $res['img_march']; ?>" name="old_image" class="hidden" id="id_abonnement">

                                                                <input id="file" type="file" class="input-file"
                                                                    name="img_march" onchange="readURL(this);">
                                                                <label for="file" class="label-file"><span
                                                                        class="plus">+</span></label>
                                                                <div class="imgs-prev">
                                                                    <img id="blah"  src="<?php echo $res['img_march']!=""? './img/uploaded/'.$res['img_march']:'./img/contact-back.png'; ?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-md-6 col-xs-12 formulaire">
                                                    <h3 class="txt-bordure sections-title">Chargement</h3>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Pays
                                                                de Chargement </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <!--
															<select class="form-control" id="countries" name="pays_charg" content-type="choices" trigger="true" target="department" required> 
																<option value="Cameroun">Cameroun</option>
																<option value="Congo">Congo</option>
																<option value="Republique Centrafricaine">Republique Centrafricaine</option>
																<option value="Tchad">Tchad</option>
															</select>
															-->

                                                                <select type="text" name="pays_charg" id="pays4"  
                                                                    placeholder="Pays *" required>
																	<option 
										<?php if($res['pays_charg']=='Cameroun') echo "selected" ?>
										value="Cameroun">
										Cameroun
									</option>
									
									<option 
										<?php if($res['pays_charg']=='Congo') echo "selected" ?>
										value="Congo">
										Congo
									</option>
									
									<option 
										<?php if($res['pays_charg']=='Gabon') echo "selected" ?>
										value="Gabon">
										Gabon
									</option>
									
									<option
										<?php if($res['pays_charg']=='Tchad') echo "selected" ?>
										value="Tchad">
										Tchad
									</option>
									
									<option 
										<?php if($res['pays_charg']=='République centrafricaine') echo "selected" ?>
										value="République centrafricaine">
										République centrafricaine
									</option>

									<option
										<?php if($res['pays_charg']=='Guinée équatoriale') echo "selected" ?>
										value="Guinée équatoriale">
										Guinée équatoriale
									</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Ville
                                                                de Chargement </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <input type="text" name="ville_charg" id="ville4"
																value=<?php echo $res['ville_charg'] ?>
                                                                    placeholder="Ville de Chargement" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Date
                                                                de Chargement </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <input type="date" name="date_charg" value=<?php echo $date_charg_americain ?> required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                                Adresse de chargement </div>
                                                            <div class="col-sm-8 col-xs-12 no-padding form">
                                                                <textarea placeholder="Adresse exacte de chargement "
                                                                    name="adresse_charg" required><?php echo $res['adresse_charg'] ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row" hidden>
                                                            <div class="col-md-12 no-padding left-title">
                                                                Tolérance au retard de chargement </div>
                                                           
                                                        </div>

                                                        <div class="row" id="nbjr2" hidden >
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Nombre
                                                                de jours </div>
                                                            <div class="col-sm-3 col-xs-12 no-padding">
                                                                <input type="number" value="<?php echo $res['jr_retard2'] ?>" name="jr_retard2">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-xs-12 formulaire">
                                                    <h3 class="txt-bordure sections-title">Livraison</h3>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Pays
                                                                de Livraison </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <!--
															<select class="form-control" id="countries" name="pays_liv" content-type="choices" trigger="true" target="department" required> 
																<option value="Cameroun">Cameroun</option>
																<option value="Congo">Congo</option>
																<option value="Republique Centrafricaine">Republique Centrafricaine</option>
																<option value="Tchad">Tchad</option>
															</select>
															-->

                                                                <select type="text" name="pays_liv" id="pays5"
                                                                    placeholder="Pays *" required
                                                                    onchange="changePays(5)">
																	<option 
										<?php if($res['pays_liv']=='Cameroun') echo "selected" ?>
										value="Cameroun" style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
										Cameroun
									</option>
									
									<option 
										<?php if($res['pays_liv']=='Congo') echo "selected" ?>
										value="Congo" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
										Congo
									</option>
									
									<option 
										<?php if($res['pays_liv']=='Gabon') echo "selected" ?>
										value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
										Gabon
									</option>
									
									<option
										<?php if($res['pays_liv']=='Tchad') echo "selected" ?>
										value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
										Tchad
									</option>
									
									<option 
										<?php if($res['pays_liv']=='République centrafricaine') echo "selected" ?>
										value="République centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
										République centrafricaine
									</option>

									<option
										<?php if($res['pays_liv']=='Guinée équatoriale') echo "selected" ?>
										value="Guinée équatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
										Guinée équatoriale
									</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Ville
                                                                de Livraison </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag5" name="ville_liv" placeholder="Ville de Livraison" required> -->
                                                                <input type="text" name="ville_liv"
                                                                    id="ville5"
																	value="<?php echo $res['ville_liv'] ?>"
                                                                    style="width: 100%; border-width: 5px;"
                                                                    placeholder="ville de livraison" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Au
                                                                plus tard </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <input type="date" name="date_liv" value=<?php echo $date_liv_americain ?> required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                                Adresse de Livraison </div>
                                                            <div class="col-sm-8 col-xs-12 no-padding form">
                                                                <textarea placeholder="Adresse exacte de livraison"
                                                                    name="adresse_liv" required><?php echo $res['adresse_liv'] ?></textarea>
                                                            </div>
                                                        </div>


                                                        <div class="row" hidden>
                                                            <div class="col-md-12 no-padding left-title">
                                                                Tolérance au retard de livraison </div>
                                                          
                                                        </div>


                                                        <div class="row" id="nbjr" hidden>
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Nombre
                                                                de jours </div>
                                                            <div class="col-sm-3 col-xs-12 no-padding">
                                                                <input type="number" name="jr_retard" value="<?php echo $res['jr_retard'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                
                                                <div class="row">
                                                            <div class="col-sm-12 col-xs-12 no-padding left-title">Sélectionner les véhicules:</div>
                                                            <div class="col-sm-12 col-xs-12 no-padding form-group">
                                                        
<script>
   $('#date_liv').on('change', function(){ 
    var date_charg =document.getElementById("date_charg").value;
    var date_liv = document.getElementById("date_liv").value;

    validsuivi(telephone,date_charg,date_liv)


})

$('#date_charg').on('change', function(){ 
    var date_charg =document.getElementById("date_charg").value;
    var date_liv = document.getElementById("date_liv").value;

    validsuivi(telephone,date_charg,date_liv)


})

function validsuivi(telephone,date_charg,date_liv) {
     
     var telephone="";
    <?php
    if (isset( $_SESSION['telephone'])) {
        ?>
        telephone=<?php echo $_SESSION['telephone'];?>;
        <?php
    }
    ?>
      $.ajax({
          type: "post",
          url: "filter_vehicule.php" ,
          'data':{"telephone":telephone,date_charg:date_charg,date_liv:date_liv},
                                  'success': function(data) {
 
                                     console.log(data+""=="0")
                                  
                                     $("#vehicules").html(data+""=="0"?"":data);   
 
 
                                  },
                                  'error': function(data) {
                                      console.log(data)
                                  }
        
      });
 
      
  }
</script>
                                            <select style="height: 50px;" type="text" id="vehicules" 
                                                multiple placeholder="Pays *" required>
                                                <option value="Select School">Selectionner les véhicules
                                               
                                                </option>
                                               
                                            </select>      
                                                        </div>
                                                        </div>
                                                <div class="col-md-12 col-xs-12 formulaire" hidden>
                                                    <h3 class="txt-bordure sections-title">Facultatif</h3>
                                                    <div class="form-group">
                                                        <div class="row margt">
                                                            <div class="col-sm-2 col-xs-12 no-padding left-title">
                                                                Proposer un Prix </div>
                                                           

                                                            <div class="col-sm-6 col-xs-12" id="prixprop"
                                                                >
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number" placeholder="Prix"
                                                                    onchange="form1.deviseval.value=form1.devise.value"
																	value="<?php echo explode(" ",$res['prix_prop'])[0]; ?>"
                                                                        name="prix_prop" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <select name="devise" class="form-control" onclick="form1.deviseval.value=form1.devise.value">
                                                                        <option <?php if($res['prix_prop']!="" && explode(" ",$res['prix_prop'])[1]=='FCFA') echo "selected"; else echo "selected"  ?> value="FCFA">FCFA</option>
                                                                        <option <?php if($res['prix_prop']!="" && explode(" ",$res['prix_prop'])[1]=='EURO') echo "selected" ?> value="EURO">EURO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
  
                                                        <div class="row margt" id="prixpropdetails" hidden >
                                                                <div class="col-sm-2 col-xs-12 no-padding left-title">Modalité de payement
</div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number"
																	value="<?php echo $res['avance']?>"
                                                                    onchange="form1.reste.value=form1.prix_prop.value-form1.avance.value"
                                                                    placeholder="Au chargement"
                                                                        name="avance" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number" placeholder="A la livraison"
                                                                    onfocus="form1.avance.value=form1.prix_prop.value-form1.reste.value"
																	value=<?php if($res['prix_prop']!="" && $res['avance']!="" ){ echo  (intval(explode(" ",$res['prix_prop'])[0] ) -intval($res['avance'] )); }   ?>
                                                                        name="reste" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-1 col-xs-12 no-padding">
                                                                <input  placeholder="devise"
																value=<?php if($res['prix_prop']!="" && explode(" ",$res['prix_prop'])[1]!=null){ echo explode(" ",$res['prix_prop'])[1];} else{ echo "FCFA";}  ?>
                                                                style="color: #808080;
																
    background-color: #eeecec;
    height: 38px;
    margin: 5px;
    border-radius: 5px;
    box-shadow: none;
    border: none;
    width: 100%;
    padding: 0px 10px;"
                                                                        name="deviseval" class="col-xs-12 number" disabled>
                                                                </div>
                                                               
                                                            </div>



                                                        <div class="row margt" hidden>
                                                            <div class="col-sm-2 col-xs-12 no-padding left-title">Valeur
                                                                de la marchandise </div>
                                                           

                                                            <div class="col-sm-6 col-xs-12" id="valeurm"
                                                                >
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number"
                                                                        placeholder="Valeur de la marchandise"
																		value="<?php echo $res['valeurm']?>"
                                                                        name="valeurm" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <select name="devise2" class="form-control">
                                                                        <option value="FCFA">FCFA</option>
                                                                        <option value="EURO">EURO</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                     


                                                            <div class="row margt" hidden >
                                                                <div class="col-sm-2 col-xs-12 no-padding left-title">Mode de payement
</div>
                                                             

                                                         <div class="col-sm-6 col-xs-12" >
                                                             
                                                             <div class="col-sm-4 col-xs-12 no-padding">
                                                                 <select name="methodepayement" class="form-control" >
                                                                     <option <?php if($res['methodepayement']=='Espèce') echo "selected" ?>
 value="Espèce">Espèce</option>
                                                                     <option  <?php if($res['methodepayement']=='Chèque') echo "selected" ?> value="Chèque">Chèque</option>
                                                                     <option value="Virement"  <?php if($res['methodepayement']=='Virement') echo "selected" ?>>Virement</option>
                                                                 </select>
                                                             </div>
                                                         </div>

                                                     </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-xs-12 formulaire" hidden>
                                                    <h3 class="txt-bordure sections-title">Personne à contacter</h3>
                                                    <div class="form-group">
                                                        <div class="row margt">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Moi
                                                                même</div>
                                                         
                                                        </div>
                                                        <div id="meNot" >
                                                            <div class="row">
                                                                <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                    Nom Complet</div>
                                                                <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                    <font color="red">
                                                                        <font color="red">*</font>
                                                                    </font>
                                                                </div>
                                                                <div class="col-sm-5 col-xs-12 no-padding">
                                                                    <input type="text" id="contact_name"
																	value="<?php echo $res['contact_name']?>"
                                                                        name="contact_name" class="col-xs-12">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                    Numéro de téléphone</div>
                                                                <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                    <font color="red">*</font>
                                                                </div>
                                                                <div class="col-sm-5 col-xs-12 no-padding">
                                                                    <input type="number" id="contact_phone"
																	value="<?php echo $res['contact_phone']?>"
                                                                        name="contact_phone" class="col-xs-12">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="txt-bordure sections-title" hidden>Autres informations</h3>


                                                        <div class="col-md-12 no-padding" hidden>
                                                            <textarea name="autre_info"placeholder="Autres informations" id="" cols="30" rows="4"><?php echo $res['autre_info']?></textarea>
                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-xs-12 formulaire">
                                                    <div class="col-xs-1 form pull-right hidden-xs">
                                                        <div class="res-flx petit ">
                                                            <input type="submit" value="Valider"
                                                                <?php if(!isset($_SESSION['login_user'])) { echo "disabled" ;} ?> />
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 form hidden-lg hidden-sm hidden-md">
                                                        <div class="res-flx ">
                                                            <input type="submit" value="Valider"
                                                                <?php if(!isset($_SESSION['login_user'])) { echo "disabled" ; } ?> />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
	</div>
</section>


<?php } ?>
<?php include"footer.php"?>