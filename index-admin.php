<?php include"header.php" ?>
                        
    <?php if  (isset($_SESSION['login_user'])) {  if($_SESSION['type']=="admin"){ ?>


<section class="page-title-section consultation">

</section>    
<section class="contact-info-section ">
    <div class=" ">
        <div class="row ">
          <div class="">
            <div class="css-tab" role="tabpanel">

              <ul class="nav nav-tabs" role="tablist">
                  
                  <li role="abonnement" class="active">
                      <a href="#abonnement" aria-controls="abonnement" role="tab" data-toggle="tab"> Abonnements </a>
                  </li>
                  
                  <li role="clients" class="">
                      <a href="#clients" aria-controls="clients" role="tab" data-toggle="tab"> Expéditeurs </a>
                  </li>
                  
                  <li role="transporteurs" class="">
                      <a href="#transporteurs" aria-controls="transporteurs" role="tab" data-toggle="tab"> Transporteurs </a>
                  </li>
                  
                  <li role="transporteurs" class="">
                      <a href="#chargements" aria-controls="chargements" role="tab" data-toggle="tab"> Chargements </a>
                  </li>
                  
                  <li role="transporteurs" class="">
                      <a href="#disponibilite" aria-controls="disponibilite" role="tab" data-toggle="tab"> Disponibilités </a>
                  </li>
                   <li role="transporteurs" class="">
                      <a href="#pub_disponibilite" aria-controls="pub_disponibilite" role="tab" data-toggle="tab"> Publication Disponiblité </a>
                  </li>
                  <li role="transporteurs" class="">
                      <a href="#ajout_gps" aria-controls="ajout_gps" role="tab" data-toggle="tab">Ajout Gps </a>
                  </li>
                  <li role="transporteurs" class="">
                      <a href="#envoi_sms" aria-controls="envoi_sms" role="tab" data-toggle="tab">Envoi SMS </a>
                  </li>
                  
              </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="abonnement">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                            <h3 class=" sections-title">Tous les Abonnements</h3>
                                    <?php
                                        $insertSQL="SELECT * FROM `transporteur`, `abonnements` WHERE abonnements.telephone=transporteur.telephone";

                                        $result = mysqli_query($db,$insertSQL);
                                        $r=mysqli_fetch_array($result);
                                        $s=mysqli_num_rows($result);
										
										$three="3 months";
										$six="6 months";
										$year="1 year";
										
                                        if ($s!=0) {
                                            do{
                                     ?>
                                        <form method="POST" name="val" action="valider_abn.php?id_abn=<?php echo $r['id_abonnement'];  ?>">
                                            <div class="cadre <?php if($r['valide']==1){ echo 'valide' ;} ?>">

                                                <div class="res-flx-s img-avatar-sm">
                                                    <img src="./img/uploaded/<?php echo $r['img_vehicule']; ?>">
                                                </div>
                                                <div class="res-flx-s "><?php echo $r['matricule']; ?></div>
                                                <div class="res-flx-s "><?php echo $r['marque']; ?></div>
                                                <div class="res-flx-s "><?php echo $r['type_vehicule']; ?></div>
                                                <div class="res-flx-s "><?php echo $r['poid_max']; ?></div>
                                                
                                                <?php if($r['valide']==0){ ?>
                                                <div class="res-flx-s ">
                                                    <select class="form-control" id="" name="pack"> 
                                                        <option value="1 year"   <?php if($r['date_fin']==date('d/m/Y', strtotime($year))) { echo "selected";} ?> >Pack 1 Ans</option>
                                                        <option value="6 months" <?php if($r['date_fin']==date('d/m/Y', strtotime($six)))  { echo "selected";} ?> >Pack 6 Mois</option>
                                                        <option value="3 months" <?php if($r['date_fin']==date('d/m/Y', strtotime($three))){ echo "selected";} ?> >Pack 3 Mois</option>
                                                    </select>
                                                </div>
                                                
                                                <?php }?>
                                                
												<?php if($r['valide']==9){ ?>
													<input name="pack" type="text" hidden value="1 month">
													<div class="res-flx-s ">Pack 1 mois Gratuit</div>
												<?php } ?>
												
                                                <div class="res-flx-s "><?php if ($r['gps']==1){ echo 'Avec GPS' ; } else {echo 'Sans GPS' ; } ?></div>
                                                <?php if($r['valide']==1){ ?>
                                                    <div class="res-flx-s">Du <?php echo $r['date_deb']; ?> Au <?php echo $r['date_fin']; ?> </div>
                                                <?php }
                                                else { ?>
                                                    <input type="submit" onclick="val.submit" value="Clique pour valider">
                                                <?php } ?>
                                                
                                                <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-abmt.php?id_abn=<?php echo $r['id_abonnement']; ?>"><img src="./img/supp.png" ></a>
                                            </div>
                                        </form>
                                    <?php
                                            }
                                            while($r=mysqli_fetch_array($result));
                                        }
                                     ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade in" id="clients">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                            <h3 class=" sections-title">Nos Expéditeurs</h3>
                                    <?php
                                        $insertSQL2="SELECT * FROM `transporteur` WHERE `type`='client' or `type`='transporteur' ";

                                        $result2 = mysqli_query($db,$insertSQL2);
                                        $r2=mysqli_fetch_array($result2);
                                        $s2=mysqli_num_rows($result2);
                                        if ($s2!=0) {
                                            $nb=0;
                                            do{
                                                $nb=$nb+1;
                                     ?>
                                        
                                            <div class="cadre valide ">

                                                <div class="res-flx-s ">
                                                    <a target="_blank" href="historique_client.php?telephone=<?php echo $r2['telephone'] ; ?>">
                                                        <?php echo $r2['nom'].' '.$r2['prenom'];  ?>
                                                    </a>
                                                </div>
                                                
                                                <div class="res-flx-s "><?php echo $r2['pays']; ?></div>
                                                <div class="res-flx-s "><?php echo $r2['adresse']; ?></div>
                                                <div class="res-flx-s "><?php echo $r2['telephone']; ?></div>
                                                <div class="res-flx-s "><?php echo $r2['email']; ?></div>
                                                <div class="res-flx-s "><?php echo $r2['Date_inscri']; ?></div>
                                                
                                                <input id=maila<?php echo $nb ; ?> type=text hidden value="<?php echo $r2['email']; ?>">
                                                    
                                                <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-compte.php?tel=<?php echo $r2['telephone']; ?>"><img src="./img/supp.png" ></a>
                                                <a class="supp" data-toggle="modal" onClick="messaffect('a<?php echo $nb ; ?>');" data-target="#message" href='#'><img src="./img/mail.png" ></a>
                                            </div>
                                        
                                    <?php
                                            }
                                            while($r2=mysqli_fetch_array($result2));
                                        }
                                     ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    
                    <div role="tabpanel" class="tab-pane fade in" id="transporteurs">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                            <h3 class=" sections-title">Nos transporteurs</h3>
                                    <?php
                                        $insertSQL3="SELECT * FROM `transporteur` WHERE `type`='transporteur'";

                                        $result3 = mysqli_query($db,$insertSQL3);
                                        $r3=mysqli_fetch_array($result3);
                                        $s3=mysqli_num_rows($result3);
                                        if ($s3!=0) {
                                            $nb=0;
                                            do{
                                                $nb=$nb+1;
                                     ?>
                                        
                                            <div class="cadre <?php if ($r3['verif']!=5) { echo "valide" ;} ?>">

                                                <div class="res-flx-s ">
                                                    <a target="_blank" href="historique_client.php?telephone=<?php echo $r3['telephone'] ; ?>">
                                                        <?php echo $r3['nom'].' '.$r3['prenom'];  ?>
                                                    </a>
                                                </div>
                                                
                                                <?php if($r3['r_s']=="") { ?>
                                                <div class="res-flx-s "><?php echo $r3['r_s']; ?></div>
                                                <?php } ?>
                                                
                                                <div class="res-flx-s "><?php echo $r3['pays']; ?></div>
                                                <div class="res-flx-s "><?php echo $r3['adresse']; ?></div>
                                                <div class="res-flx-s "><?php echo $r3['telephone']; ?></div>
												<div class="res-flx-s "><?php echo $r3['email']; ?></div>
												 <div class="res-flx-s "><?php echo $r3['Date_inscri']; ?></div>
                                                    
                                                <input id=mailc<?php echo $nb ; ?> type=text hidden value="<?php echo $r3['email']; ?>">
                                                    
                                                <a class="supp" onclick="return confirm('Êtes-vous sûr de SUPPRIMER ce compte ?')" href="supp-compte.php?tel=<?php echo $r3['telephone']; ?>"><img src="./img/supp.png" ></a>
												<?php if ($r3['verif']==5) {?>
                                                <a class="supp" onclick="return confirm('Êtes-vous sûr de DEBANNER ce compte ?')" href="unban-compte.php?telephone=<?php echo $r3['telephone']; ?>"><img src="./img/unban.png" ></a>
												<?php } else{?>
												<a class="supp" onclick="return confirm('Êtes-vous sûr de BANNER ce compte ?')" href="ban-compte.php?telephone=<?php echo $r3['telephone']; ?>"><img src="./img/ban.png" ></a>
                                                <?php }?>
                                                <a class="supp" data-toggle="modal" onClick="messaffect('c<?php echo $nb ; ?>');" data-target="#message" href='#'><img src="./img/mail.png" ></a>
                                            </div>
                                        
                                    <?php
                                            }
                                            while($r3=mysqli_fetch_array($result3));
                                        }
                                     ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane fade in" id="chargements">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                            <h3 class=" sections-title">Chargements</h3>
                                            <?php
                                                $insertSQL="SELECT * FROM chargement, transporteur WHERE chargement.telephone=transporteur.telephone";

                                                $result = mysqli_query($db,$insertSQL);
                                                $r=mysqli_fetch_array($result);
                                                $s=mysqli_num_rows($result);
                                                //echo "$insertSQL ";
                                                if ($s!=0) {
                                                    do{
                                             ?>   
                                            <div class="container result-rech">

                                                <div class="res-flx img-avatar">
                                                    <img src="./img/uploaded/<?php echo $r['img_march']; ?>">
                                                </div>
                                                <div class="res-flx hidden-xs"><?php echo $r['marchandise']; ?></div>
                                                <div class="res-flx">Depart : <?php echo $r['ville_charg'].' ,'.$r['pays_charg']; ?></div>
                                                <div class="res-flx">Arrivée : <?php echo $r['ville_liv'].', '. $r['pays_liv']; ?></div>
                                                <div class="res-flx petit"><?php echo $r['poid'].' Tonnes'; ?></div>

                                                <div class="res-flx petit hidden-xs">
                                                    <input type="submit" value="Consulter" onclick="location.href='chargement.php?id_charg=<?php echo $r['id_charg']; ?>' ">
                                                </div>

                                                <div class="res-flx hidden-lg hidden-md hidden-sm">
                                                    <input type="submit" value="Consulter" onclick="location.href='chargement.php?id_charg=<?php echo $r['id_charg']; ?>' ">
                                                </div>
                                                
                                                <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-charg.php?id_charg=<?php echo $r['id_charg']; ?>"><img src="./img/supp.png" ></a>

                                            </div>
                                            <?php
                                                }
                                                while($r=mysqli_fetch_array($result));
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div role="tabpanel" class="tab-pane fade in" id="disponibilite">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                            <h3 class=" sections-title">Disponibilités</h3>
                                            <?php
                                                $insertSQL="SELECT * FROM disponibilite, transporteur, abonnements WHERE disponibilite.id_abonnement=abonnements.id_abonnement AND abonnements.telephone=transporteur.telephone";

                                                $result = mysqli_query($db,$insertSQL);
                                                $r=mysqli_fetch_array($result);
                                                $s=mysqli_num_rows($result);

                                                if ($s!=0) {
                                                    do{
                                             ?>
                                            
                                            <div class="container result-rech">

                                                <div class="res-flx img-avatar">
                                                    <img src="./img/uploaded/<?php echo $r['img_vehicule']; ?>">
                                                    <span class="names hidden-xs"><?php echo $r['nom']; ?></span>
                                                </div>
                                                <div class="res-flx hidden-md hidden-sm hidden-lg"><?php echo $r['nom']; ?></div>
                                                <div class="res-flx"><?php echo $r['date_dep']; ?></div>
                                                <div class="res-flx"><?php echo $r['genre']; ?></div>
                                                <div class="res-flx"><?php echo $r['type_vehicule']; ?></div>
                                                <div class="res-flx petit"><?php echo $r['poid_disp']; ?> Tonnes</div>
                                                <div class="res-flx hidden-xs petit act"><span class="flaticon-international "></span></div>
                                                <div class="res-flx petit hidden-xs">
                                                    <input type="submit" value="Consultez" onclick="location.href='disponibilite.php?id_disp=<?php echo $r['id_disp']; ?>'  ">
                                                </div>

                                                <div class="res-flx hidden-lg hidden-md hidden-sm">
                                                    <input type="submit" value="Consultez" onclick="location.href='disponibilite.php?id_disp=<?php echo $r['id_disp']; ?>'  " >
                                                </div>
                                                
                                                <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-disp.php?id_disp=<?php echo $r['id_disp']; ?>"><img src="./img/supp.png" ></a>
                                            </div>

                                             <?php
                                                    }
                                                    while($r=mysqli_fetch_array($result));
                                                }
                                             ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                  
                 <! -- Ajout Dispoibilité --> 
                    <div role="tabpanel" class="tab-pane fade in" id="pub_disponibilite">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                          
                                         <! -- Ajout Dispo --> 
                                           <form id="form1" runat="server" action="post-dispoadm.php" method="POST">
                                        <h3 class="txt-bordure sections-title">Ajouter Camion</h3>
                                        <div class="row">
                                                                        <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                            <select name="id_ab">
                                        <?php 
                                        $sql = mysqli_query($db, "SELECT * FROM abonnements");
                                        while ($row = $sql->fetch_assoc()){
                                        echo "<option value='" . $row['id_abonnement'] . "'>" . $row['matricule'] . "</option>";
                                         }
                                         ?>
                                         </select></div></div>
                                          <div class="row">
                                                                        <div class="col-sm-3 col-xs-12  no-padding left-title">Poids Disponible (T) </div>
                                                                        <div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
                                                                        <div class="col-sm-5 col-xs-12 no-padding">
                                                                            <input step="0.1" min="0.1" type="number" required class="col-xs-12" name="poid_disp" >
                                                                        </div>
                                                                    </div>


														<div class="col-md-6 col-xs-12 formulaire">
                                                            <h3 class="txt-bordure sections-title">Chargement</h3>
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Pays de Départ </div>
                                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                                       
                                                                        
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
                                                                     <div class="col-sm-6 col-xs-12 no-padding" > 
            
            <input type="text" name="ville_dep" id="autocomplete"/>
        </div>
       
                                                                  
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
                                                                                                 <div class="col-sm-6 col-xs-12 no-padding" >  
            <input type="text" name="ville_arr" id="autocomplete-dynamic" style="width: 100%; border-width: 5px;"/>
        </div>
       
                                                                
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
                                                                <input type="submit" value="Valider" >
                                                                    
                             
               
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-xs-12 form hidden-lg hidden-sm hidden-md">
                                                            <div class="res-flx petit ">
                                                                <input type="submit" value="Postuler" >
                                                            </div>
                                                        </div>

                                                    </div>
                                                    </form>
                                           
                                          <! -- fin Form -->
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <! -- fin --> 
                   
                     <!--ajout SMS-->
                    <div role="tabpanel" class="tab-pane fade in" id="envoi_sms">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                            <h3 class=" sections-title">Send SMS</h3>
                                           <form action="https://api.1s2u.io/bulksms" method="get">
<input  name="username" type="hidden" value="smscontact020">
<input  name="password" type="hidden" value="web89355">

	<label for="phone">Votre Numéro</label>
	<input type="tel" name="mno"/><br/>
	<label for="body">Votre Message</label>
     <input  name="sid" type="hidden" value="Telefret">
	<textarea name="msg" maxlength="160"></textarea><br/>
    <input  name="mt" type="hidden" value="0">
    <input  name="fl" type="hidden" value="1">
	<input type="submit" />
</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--fin ajout SMS-->
                    
                  <! -- Ajout Gps --> 
                    <div role="tabpanel" class="tab-pane fade in" id="ajout_gps">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                        
                                            <form id="form1" runat="server" action="ajout-gps.php" method="POST">
                                        <h3 class="txt-bordure sections-title">Ajouter GPS</h3>
                                        <div class="row">
                                                                        <div class="col-sm-3 col-xs-12  no-padding left-title">Matricule abonnement
                                                                            <select name="id_ab">
                                        <?php 
                                        $sql = mysqli_query($db, "SELECT * FROM abonnements");
                                        while ($row = $sql->fetch_assoc()){
                                        echo "<option value='" . $row['id_abonnement'] . "'>" . $row['matricule'] . "</option>";
                                         }
                                         ?>
                                         </select></div></div>
                                             
                                         	<div class="col-sm-3 col-xs-12  no-padding left-title">ID gps</div>
																		<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
																		<div class="col-sm-5 col-xs-12 no-padding">
																			<input type="text"  id="id_gps" name="id_gps" value="" class="col-xs-12">
																			  <input type="submit" value="Ajout GPS" >
																		</div>
																		
																		
																		<br><br>
																		<h3 class="txt-bordure sections-title">Activation Suivi</h3>
																		 <div class="row">
                                                                        <div class="col-sm-3 col-xs-12  no-padding left-title">Matricule abonnement 
                                                                            <select name="id_ab">
                                        <?php 
                                        $sql = mysqli_query($db, "SELECT * FROM abonnements");
                                        while ($row = $sql->fetch_assoc()){
                                        echo "<option value='" . $row['id_abonnement'] . "'>" . $row['matricule'] . "</option>";
                                         }
                                         ?>
                                         </select></div></div>
																			<div class="col-sm-3 col-xs-12  no-padding left-title">Activation Suivi</div>
																		<div class="col-sm-1 hidden-xs no-padding left-title"><font color="red">*</font></div>
																		<div class="col-sm-5 col-xs-12 no-padding">
																			<select class="form-control" id="" name="Suivi"> 
                                                        
                                              <option value="1" >Active</option>
                                              <option value="0" >Non-Active</option>
                                              
                                             
                                                        
                                                    </select>
                                                       <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Date Début Suivi </div>
                                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                                        <input required type="date" name="date_deb">
                                                                    </div>
                                                                </div>
                                                                   <div class="row">
                                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Date Fin Suivi </div>
                                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                                        <input required type="date" name="date_fin">
                                                                    </div>
                                                                </div>
																			  <input type="submit" value="Valider" >
																		</div>
                                         
                                        
        
                                        
                                        
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <! -- fin  -->
                    
                    <!--ajout SMS-->
                    <div role="tabpanel" class="tab-pane fade in" id="Envoi_SMS">
                        <div class="css-tab-content">
                            <div class="tab-pane fade in active">
                                <div class="css-tab-content formulaires">
                                    
                                </div>
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="contact-map">
                                            <h3 class=" sections-title">Send SMS</h3>
                                           <form action="https://api.1s2u.io/bulksms" method="get">
<input  name="username" type="hidden" value="smscontact020">
<input  name="password" type="hidden" value="web89355">

	<label for="phone">Votre Numéro</label>
	<input type="tel" name="mno"/><br/>
	<label for="body">Votre Message</label>
     <input  name="sid" type="hidden" value="Telefret">
	<textarea name="msg" maxlength="160"></textarea><br/>
    <input  name="mt" type="hidden" value="0">
    <input  name="fl" type="hidden" value="1">
	<input type="submit" />
</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--fin ajout SMS-->
                    
                </div>
              </div>
            </div>
        </div>
    </div>
   
    
    <div class="modal fade fond" id="message" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
      <div class="w-50">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
              <section class="packs-setion">
                    <div class="flxrow form-group">
                        <div class="row text-center">
                            <div class="col-xs-12">
                              <span class="section-sub sections-title">Envoyer un message </span>
                                <br>
                                <br>
                            </div>
                        </div>
                        <div class="row form w80">
                            <form name="msg" action="admin-sendmail.php" method="POST">
                                <div class="col-sm-12">
                                    <input type="text" id="mailmsg" name="mailmsg" placeholder="E-mail">
                                </div>

                                <div class="col-sm-12">
                                    <textarea name="msg" placeholder="Votre Message"></textarea>
                                </div>

                                <div class="col-sm-12 regle-form">
                                    <input class="pull-right" type="submit" value="Envoyer">
                                </div>
                            </form>
                        </div>

                    </div>
                </section>
         </div>
        </div>
      </div>
    </div>
    
</section>
    
<?php } }else{ ?>

<section class="page-title-section consultation">
</section>

<section class="contact-info-section ">
    <div class=" ">
        <div class="row ">
          <div class="">
            <div class="css-tab" role="tabpanel">
              <ul class="nav nav-tabs" role="tablist">

                  <li role="pub-ann" class="active">
                      <a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab"> Vous n'êtes pas un Admin </a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>
<?php include"footer.php" ?>