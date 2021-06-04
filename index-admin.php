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
                                                
                                                <input id=maila<?php echo $nb ; ?> type=text hidden value="<?php echo $r2['telephone']; ?>">
                                                    
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
                                                    
                                                <input id=mailc<?php echo $nb ; ?> type=text hidden value="<?php echo $r3['telephone']; ?>">
                                                    
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