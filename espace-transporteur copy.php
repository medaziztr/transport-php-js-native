<?php include"header.php"?>

<?php
    
    

    extract($_POST,EXTR_OVERWRITE);
    $today =   strtotime(date('d-m-Y')) ;

    $editFormAction = $_SERVER['PHP_SELF'];
    if (isset($_SERVER['QUERY_STRING'])) {
      $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
    }

    $filtre = "1=1" ;

    
    
    if (!empty($_POST)){
        
        if($pays_charg!="off"){
            $filtre.=" AND pays_charg='$pays_charg'";
        }
        
        if($ville_charg!="off"){
            $filtre.=" AND ville_charg='$ville_charg'";
        }
        
        if($pays_liv!="off"){
            $filtre.=" AND pays_liv='$pays_liv'";
        }
        
        if($ville_liv!="off"){
            $filtre.=" AND ville_liv='$ville_liv'";
        }
        
    }

    if(isset($_SESSION['login_user'])) {
    
    $telephone=$_SESSION['telephone'];
    
    $selectSQL="SELECT * FROM abonnements WHERE telephone='$telephone' AND valide='1' ";
                                                     
        $resultat = mysqli_query($db,$selectSQL);
        $res=mysqli_fetch_array($resultat);
        $s=mysqli_num_rows($resultat);                                              
    }
?>

    
                    <section class="page-title-section trouvtrans">
                        <div class="container hidden-xs slide-bord">
                            <div class="demo-slides">
                                <div class="animated lightSpeedIn slide-title">Trouver un Expéditeur</div>
                                <p class="lead animated lightSpeedIn">Veuillez remplir la ou les critéres suivants</p>
                            </div>
                        </div>
					</section>


					<section class="contact-info-section">
						<div class=" ">
                            <div class="row ">
			              	<div class="">
								<div class="css-tab" role="tabpanel">

								  <!-- Nav tabs -->
								  <ul class="nav nav-tabs" role="tablist">
								    
                                      <li role="pub-ann" class="active">
                                          <a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab"> Cherchez Un Chargement</a>
                                      </li>
                                      
                                      <li role="choix">
                                          <a href="#choix" aria-controls="choix" role="tab" data-toggle="tab">Annoncer votre camion</a>
                                      </li>
								  </ul>

								  <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="pub-ann">
                                            <div class="css-tab-content">
                                                 <div class="tab-pane fade in active">
                                                    <div class="css-tab-content formulaires">
                                                        <form method="POST" action="<?php echo $editFormAction; ?>">
                                                        
                                                        <div class="container">
                                                            <div class="col-md-6 formulaire">
                                                                <h3 class="txt-bordure sections-title">Départ</h3>

                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-1 hidden-xs no-padding left-title">De </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            
                                                                            <!--
                                                                            <select class="form-control" id="countries" name="pays_charg" content-type="choices" trigger="true" target="department"> 
                                                                                <option value="off">Pays de Chargement</option>
                                                                                <option value="Cameroun" selected >Cameroun</option>
                                                                                <option value="Congo">Congo</option>
                                                                                <option value="République Centrafricaine">République Centrafricaine</option>
                                                                                <option value="Tchad">Tchad</option>
                                                                            </select>
                                                                            -->
                                                                            
                                                                            <select type="text" name="pays_charg" id="pays6" placeholder="Pays *" required  onchange="changePays(6)">
                                                                                <option value="Cameroun"  selected  style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">Cameroun</option>
                                                                                <option value="Congo" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">Congo</option>
                                                                                <option value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">Gabon</option>
                                                                                <option value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">Tchad</option>
                                                                                <option value="République centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">République centrafricaine</option>
                                                                                <option value="Guinée équatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">Guinée équatoriale</option>
																				<option value="off" > Pays de chargement </option>
                                                                            </select>
                                                                            
                                                                        </div>
                                                                        <div class="col-sm-1 hidden-xs no-padding left-title">, </div>
                                                                        
                                                                        <div class="col-sm-4 col-xs-12 no-padding"> 
																			<!-- <input type="text" class="form-control"  id="tag6" name="ville_charg" placeholder="Ville de Chargement"> -->
																			<input type="text" name="ville_charg" id="autocomplete-ajax"  placeholder="Ville de Chargement">
            <input type="text" name="ville_charg" id="autocomplete-ajax-x" disabled="disabled" style="color: #CCC; position: absolute; background: transparent; z-index: 1;"/>
																		</div>

                                                                    </div>
                                                                </div>     
                                                            </div>

                                                            <div class="col-md-6 formulaire">
                                                                <h3 class="txt-bordure sections-title">Arrivée</h3>

                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-sm-1 hidden-xs no-padding left-title">à </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                                            <!--
                                                                            <select class="form-control" id="countries" name="pays_liv" content-type="choices" trigger="true" target="dep"> 
                                                                                <option value="off">Pays arrivée</option>
                                                                                <option value="Cameroun" selected >Cameroun</option>
                                                                                <option value="Congo">Congo</option>
                                                                                <option value="République Centrafricaine">République Centrafricaine</option>
                                                                                <option value="Tchad">Tchad</option>
                                                                            </select>
                                                                            -->
                                                                            
                                                                            <select type="text" name="pays_liv" id="pays7" placeholder="Pays *" required  onchange="changePays(7)">
                                                                                <option value="Cameroun"  selected style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">Cameroun</option>
                                                                                <option value="Congo" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">Congo</option>
                                                                                <option value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">Gabon</option>
                                                                                <option value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">Tchad</option>
                                                                                <option value="République centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">République centrafricaine</option>
                                                                                <option value="Guinée équatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">Guinée équatoriale</option>
																				<option value="off" > Pays d'arrivée </option>
																			</select>
                                                                        </div>
                                                                        <div class="col-sm-1 hidden-xs no-padding left-title">, </div>
                                                                        <div class="col-sm-4 col-xs-12 no-padding"> 
																			<!-- <input type="text" class="form-control"  id="tag7" name="ville_liv" placeholder="Ville de livraison"> -->
																			<input type="text" name="ville_liv" id="autocomplete-custom-append"  style="width: 100%; border-width: 5px;" placeholder="Ville de livraison"/>
																		<div id="suggestions-container" style="position: relative;"></div>
																		</div>
                                                                        <div class="btn-submit pull-right">
                                                                            <input type="submit" value="">
                                                                        </div>
                                                                        
   
                                                                    </div>
                                                                </div>     
                                                            </div>

                                                        </div>
                                                        </form>
                                                     
                                                    </div>
								
                                                      
                                                        
                                                      
                                         
                                                        
                                                     <?php
                                                        $insertSQL55="SELECT * FROM chargement, transporteur WHERE $filtre AND chargement.telephone=transporteur.telephone";
                                                     
                                                        $result55 = mysqli_query($db,$insertSQL55);
                                                        $r55=mysqli_fetch_array($result55);
                                                        $s55=mysqli_num_rows($result55);
                                                        //echo "$insertSQL ";
                                                        if ($s55!=0) {
                                                            do{
                                                                $date_liv = $r55["date_liv"];
																$date_liv_americain = str_replace('/', '-', $date_liv );
                                                                $date_livraison=strtotime($date_liv_americain) ;
																
                                                                if ($date_livraison >= $today){
                                                     ?>
                                                     
                                            
                                                    
                                                    <div class="container result-rech">

                                                        <div class="res-flx img-avatar">
                                                            <img src="./img/uploaded/<?php echo $r55['img_march']; ?>">
                                                        </div>
                                                        <div class="res-flx "><?php echo $r55['marchandise']; ?></div>
                                                        <div class="res-flx"><?php echo 'Départ : '.$r55['ville_charg'].' , '.$r55['pays_charg']; ?></div>
                                                        <div class="res-flx"><?php echo 'Arrivée : '.$r55['ville_liv'].' , '.$r55['pays_liv']; ?></div>
                                                        <div class="res-flx petit"><?php echo 'Poids : '.$r55['poid'] ; ?></div>
														<?php if ($r55['prix_prop']!=""){ ?>
                                                        <div class="res-flx petit"> <?php echo 'Prix proposé : '.$r55['prix_prop']; ?></div>
                                                        <?php } else{ ?>
														<div class="res-flx petit"> <?php echo "Prix proposé non indiqué "?></div>
														<?php } ?>
                                                        <div class="res-flx petit hidden-xs">
                                                            <input type="submit" value="Consulter" onclick="location.href='chargement.php?id_charg=<?php echo $r55['id_charg']; ?>' "
                                                             <?php 
                                                                if(!isset($_SESSION['login_user'])) {
                                                                    echo "disabled" ;  
                                                                } else {
                                                                    if ($_SESSION['type']!="transporteur"){ echo "disabled" ;} }  
                                                               ?>      
                                                                   
                                                               >
                                                        </div>
                                                        
                                                        <div class="res-flx hidden-lg hidden-md hidden-sm">
                                                            <input type="submit" value="Consulter" onclick="location.href='chargement.php?id_charg=<?php echo $r55['id_charg']; ?>' "
                                                             <?php 
                                                                if(!isset($_SESSION['login_user'])) { 
                                                                    echo "disabled" ;  
                                                                } else {
                                                                    if ($_SESSION['type']!="transporteur"){ echo "disabled" ;} }  
                                                               ?>      
                                                                   
                                                               >
                                                        </div>
                                                        
                                                    </div>
                                                    <?php
                                                            }
                                                        }
                                                        while($r55=mysqli_fetch_array($result55));
                                                        }
                                                    ?>
                                                     
                                                </div>
                                            </div>
                                        </div>
                                      
                                      
                                      
                                      <div role="tabpanel" class="tab-pane fade in" id="choix">
                                        <div class="css-tab-content">
                                             <div class="tab-pane fade in active">
                                                <div class="css-tab-content formulaires">
                                                    <form id="form1" runat="server" action="post-dispo.php" method="POST">
                                                    
                                                    <div class="container">
                                                        <div class="col-md-8 col-xs-12 formulaire">
                                                            <h3 class="txt-bordure sections-title">Vos Matricules</h3>
                                                            
                                                            <div class="form-group">
                                                            <?php if ( (isset($_SESSION['login_user'])) AND ($_SESSION['type']=="transporteur") ) {
																	if ($s!=0){
                                                            ?>
                                                                    <div class="row">
                                                                        <div class="col-sm-3 col-xs-12 no-padding left-title">Matricule </div>
                                                                        <div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
                                                                        <div class="col-sm-5 col-xs-12 no-padding">
                                                                        <select class="form-control" id="" name="id_ab" required> 
                                                                        <?php
                                                                            do{
                                                                                if($_SESSION['type']=='transporteur'){
                                                                        ?>
                                                                                <option value="<?php echo $res['id_abonnement']; ?>"><?php echo $res['matricule']; ?></option>
                                                                        <?php
                                                                                }
                                                                            }
                                                                            while($res=mysqli_fetch_array($resultat));
                                                                        ?>
                                                                        </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-3 col-xs-12  no-padding left-title">Poids Disponible (T) </div>
                                                                        <div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
                                                                        <div class="col-sm-5 col-xs-12 no-padding">
                                                                            <input step="0.1" min="0.1" type="number" required class="col-xs-12" name="poid_disp" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                    <div class="col-sm-3 col-xs-12  no-padding left-title"><font color="red">* Champs obligatoires</font></div>
                                                                    </div>
																	
                                                                <?php
                                                                    }
                                                                    else{
                                                                ?>
                                                                
                                                                <a href="packs.php">Abonnez Vous pour Accéder a Nos Services</a>
                                                                
                                                                <?php
                                                                    }
                                                                }
                                                                else{
                                                                ?>
                                                                
                                                                    <a href="#" id='logintest' data-toggle="modal" data-target="#login">Vous n'êtes pas connecté</a>
                                                                
                                                                <?php
                                                                }
                                                                ?>    
                                                            </div>     
                                                        </div>
                                                        
                                              
															
														<div class="col-md-6 col-xs-12 formulaire">
                                                            <h3 class="txt-bordure sections-title">Chargement</h3>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Pays de Départ </div>
                                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                                        <!--
                                                                        <select class="form-control" id="countries" name="pays_dep" content-type="choices" trigger="true" target="department"> 
                                                                            <option selected>Region de départ</option>
                                                                            <option value="Cameroun">Cameroun</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="République Centrafricaine">République Centrafricaine</option>
                                                                            <option value="Tchad">Tchad</option>
                                                                        </select>
                                                                        -->
                                                                        
                                                                        <select type="text" name="pays_dep" id="pays8" placeholder="Pays *" required onchange="changePays(8)" >
                                                                            <option selected value="Cameroun" style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">Cameroun</option>
                                                                            <option value="Congo" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">Congo</option>
                                                                            <option value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">Gabon</option>
                                                                            <option value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">Tchad</option>
                                                                            <option value="République centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">République centrafricaine</option>
                                                                            <option value="Guinée équatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">Guinée équatoriale</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Ville de Départ </div>
                                                                     <div class="col-sm-6 col-xs-12 no-padding" > <!-- style="height: 80px; width :200px;"--> 
            <!--<input type="text" name="ville_dep" id="autocomplete-ajax"  placeholder="Ville de départ">
            <input type="text" name="ville_dep" id="autocomplete-ajax-x" disabled="disabled" style="color: #CCC; position: absolute; background: transparent; z-index: 1;"/> -->
            <input type="text" name="ville_dep" id="autocomplete"/>
        </div>
       
                                                                   <!-- <div class="col-sm-6 col-xs-12 no-padding"> 
                                                                        <input required type='text' id="tag8" class="form-control" name="ville_dep" >
                                                                    </div> -->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Date de Départ </div>
                                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                                        <input required type="date" name="date_dep">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Adresse de Départ </div>
                                                                    <div class="col-sm-8 col-xs-12 no-padding form">
                                                                        <textarea required placeholder="Votre Adresse de Départ" name="adresse_dep"></textarea>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6 col-xs-12 formulaire">
                                                            <h3 class="txt-bordure sections-title">Arrivée</h3>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Pays d'arrivée </div>
                                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                                        
                                                                        <!--
                                                                        <select class="form-control" id="countries" name="pays_arr" content-type="choices" trigger="true" target="department"> 
                                                                            <option selected>Region de départ</option>
                                                                            <option value="Cameroun">Cameroun</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="République Centrafricaine">République Centrafricaine</option>
                                                                            <option value="Tchad">Tchad</option>
                                                                        </select>
                                                                        -->
                                                                        
                                                                        <select type="text" name="pays_arr" id="pays9" placeholder="Pays *" required onchange="changePays(9)" >
                                                                            <option selected value="Cameroun" style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">Cameroun</option>
                                                                            <option value="Congo" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">Congo</option>
                                                                            <option value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">Gabon</option>
                                                                            <option value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">Tchad</option>
                                                                            <option value="République centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">République centrafricaine</option>
                                                                            <option value="Guinée équatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">Guinée équatoriale</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Ville d'arrivée </div>
                                                                                                 <div class="col-sm-6 col-xs-12 no-padding" > <!-- style="height: 80px; width :200px;"--> 
            <input type="text" name="ville_arr" id="autocomplete-dynamic" style="width: 100%; border-width: 5px;"/>
        </div>
       
                                                                   <!-- <div class="col-sm-6 col-xs-12 no-padding"> 
                                                                        <input type='text' required class="form-control"  id="tag9" name="ville_arr" >   
                                                                        
                                                                    </div> -->
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Au plus tard </div>
                                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                                        <input required type="date" name="date_arr">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Destination </div>
                                                                    <div class="col-sm-8 col-xs-12 no-padding form">
                                                                        <textarea required placeholder="Votre adresse de destination" name="adresse_arr"></textarea>
                                                                    </div>
                                                                </div>                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                                  <div class="col-md-8 col-xs-12 formulaire">
                                                            <h3 class="txt-bordure sections-title">Personne à contacter</h3>
															<div class="form-group">
																<div class="row margt">
																	<div class="col-sm-3 col-xs-12 no-padding left-title">Moi même</div>
																	<div class="col-sm-7 col-xs-12 no-padding form">
																		<div class="onoffswitch">
																			<input type="checkbox" checked="checked" class="onoffswitch-checkbox" name="contactPersonX"  id="contactPersonX" onclick="contactPerson()">
																			<label class="onoffswitch-label" for="contactPersonX">
																				<span class="onoffswitch-inner"></span>
																				<span class="onoffswitch-switch"></span>
																			</label>
																		</div>
																	</div>
																</div>
																<div id="meNot" style="display:none">
																	<div class="row">
																		<div class="col-sm-3 col-xs-12  no-padding left-title">Nom Complet</div>
																		<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
																		<div class="col-sm-5 col-xs-12 no-padding">
																			<input type="text"  id="contact_name" name="contact_name" value="" class="col-xs-12">
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-sm-3 col-xs-12  no-padding left-title">Numéro de téléphone</div>
																		<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
																		<div class="col-sm-5 col-xs-12 no-padding">
																			<input type="number"  pattern="[0-9]{15}" value="" id="contact_phone" name="contact_phone" class="col-xs-12">
																		</div>	
																	</div>
																</div>
															</div></div>
								<div class="col-md-8 col-xs-12 formulaire">						
                                                        <div class="col-xs-1 form pull-right hidden-xs">
                                                            <div class="res-flx petit ">
                                                                <input type="submit" value="Valider" 
                                                                    
                                                                   <?php 
                                                                    if(!isset($_SESSION['login_user'])) { 
                                                                        echo "disabled" ;  
                                                                    } else {
                                                                        if (($_SESSION['type']!="transporteur") OR ( $s==0 ) ){ echo "disabled" ;} }  
                                                                   ?>
                                                                >
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-xs-12 form hidden-lg hidden-sm hidden-md">
                                                            <div class="res-flx petit ">
                                                                <input type="submit" value="Postuler" 
                                                                    
                                                                   <?php 
                                                                    if(!isset($_SESSION['login_user'])) { 
                                                                        echo "disabled" ;  
                                                                    } else {
                                                                        if (($_SESSION['type']!="transporteur") OR ( $s==0 ) ){ echo "disabled" ;} }  
                                                                   ?>
                                                                >
                                                            </div>
                                                        </div>

                                                    </div></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								    
								  </div>
								</div><!-- /.css-tab -->
			              	</div><!-- /.col-md-12 -->
			              </div>
							
						</div>
                        
					</section>
					
        
      
        

<?php include"footer.php" ?>