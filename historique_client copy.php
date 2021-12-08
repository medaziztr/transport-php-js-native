<?php include"header.php" ?>

<?php
    $telephone=$_GET['telephone'];
    $today =   strtotime(date('d-m-Y')) ;
	
	$sql = "SELECT * FROM `transporteur` WHERE `telephone`='$telephone'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


    if ($row['type']=="transporteur" ){
?>



<?php
    }
    if (($row['type']=="transporteur") OR ($row['type']=="client")){
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
                        <h3 class="txt-bordure sections-title">Historique Chargements</h3>

                        <div class="css-tab-content formulaires">
                                        <form name="filtre" method="POST" action="<?php echo $editFormAction; ?>">
                                          
                                        <div class="container">
                                            <div class="col-md-6 formulaire">
                                                <h3 class="txt-bordure sections-title">Depart</h3>

                                                <div class="form-group">
                                                    <div class="row">
                                                     
                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                            <select type="text" name="pays_dep" id="pays2" placeholder="Pays *" onchange="changePays(2)" required >
                                                                <option value="Cameroun" selected style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">Cameroun</option>
                                                                <option value="Congo" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">Congo</option>
                                                                <option value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">Gabon</option>
                                                                <option value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">Tchad</option>
                                                                <option value="Republique centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">Republique centrafricaine</option>
                                                                <option value="Guinee equatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">Guinee equatoriale</option>
																<option value="off" > Pays départ </option>
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-sm-4 col-xs-12 no-padding"> 
															<!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
															<input type="text" name="ville_dep" id="autocomplete-ajax"  placeholder="Ville de Chargement">
            <input  type="text" name="ville_dep" id="autocomplete-ajax-x" disabled="disabled" style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;"/>
														</div>
                                                        <div class="col-sm-3 col-xs-12 no-padding"> 
															<!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
															<input type="date" name="ville_dep" id="dated"  placeholder="dated">
														</div>
                                                    </div>
                                                </div>     
                                            </div>

                                            <div class="col-md-6 formulaire">
                                                <h3 class="txt-bordure sections-title">Arrivee</h3>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                           
                                                            <select type="text" name="pays_arr" id="pays3" placeholder="Pays *" required onchange="changePays(3)" >
                                                                <option value="Cameroun" selected style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">Cameroun</option>
                                                                <option value="Congo" style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">Congo</option>
                                                                <option value="Gabon" style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">Gabon</option>
                                                                <option value="Tchad" style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">Tchad</option>
                                                                <option value="Republique centrafricaine" style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">Republique centrafricaine</option>
                                                                <option value="Guinee equatoriale" style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">Guinee equatoriale</option>
																<option value="off" > Pays d'arrivé </option>
                                                            </select>
                                                            
                                                        </div>
                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                            <!-- <input type="text" class="form-control"  id="tag3" name="ville_arr" placeholder="Ville de départ"> -->
                                                            <input type="text" name="ville_arr" id="autocomplete-custom-append"  style="width: 100%; border-width: 5px;" placeholder="Ville de livraison"/>
																		<div id="suggestions-container" style="position: relative;"></div>
                                                        </div>
                                                        <div class="col-sm-3 col-xs-12 no-padding"> 
															<!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
															<input type="date" name="datef" id="datef"  placeholder="datef">
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
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Image</th>
                <th>Marchandise</th>
                <th>Poid</th>
                <th>Volume</th>
                <th>Départ</th>
                <th>Arrivée</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

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
                                
                                <tr style="<?php if($date_livraison>$today){ echo ' background-color: rgba(25,184,53,0.1) !important;' ;}else{ echo ' background-color: rgba(200,16,16,0.1)!important;' ;} ?>">
                <td> <div class="res-flx-s img-avatar-sm">
                                            <img src="./img/uploaded/<?php echo $res['img_march']?$res['img_march']:"logo.png"; ?>">
                                        </td>
                <td><?php echo $res['marchandise']; ?></td>
                <td><?php echo $res['poid']; ?></td>
                <td><?php echo $res['volume']; ?></td>
                <td><?php echo $res['ville_charg'].", ".$res['pays_charg'].", ".$res['date_charg'] ; ?></td>
                <td><?php echo $res['ville_liv'].", ".$res['pays_liv'].", ".$res['date_liv'] ; ?> </td>
                <td>
                                        <a href="modif-charg.php?id_charg=<?php echo $res['id_charg']; ?>&amp;telephone=<?php echo $res['telephone']; ?>"><img src="./img/modif.png"  style="height:20px;width:20px"></a>
                                        <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-charg.php?id_charg=<?php echo $res['id_charg']; ?>&amp;telephone=<?php echo $telephone; ?>"><img style="height:20px;width:20px" src="./img/supp.png" ></a>
                                    </td>
            </tr>


              
            <?php
                            
                        }
                        while($res=mysqli_fetch_array($resultat));
                    }
                    else{
                        echo "<p> ".$row['prenom']." ".$row['nom']." n'a rien dans son historique </p>";
                    }
                ?>
           
        </tbody>
        <tfoot>
            
            <tr>
            <th>Image</th>
                <th>Marchandise</th>
                <th>Poid</th>
                <th>Volume</th>
                <th>Départ</th>
                <th>Arrivée</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
              
                    </div>
                </div>
            </div>
        </div>
    </section>           
                
                
<?php } ?>


<?php include"footer.php" ?>