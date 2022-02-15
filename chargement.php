<?php include"header.php" ?>

<section class="page-title-section consultation">
</section>
<section class="contact-info-section">
    <div class="container ">

        <div class="row content-row">

            <div class="col-md-6">
                <div class="contact-map" id="testprint">
                    <?php
                        $id_charg=$_GET['id_charg'];

                        $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

                        $resultat = mysqli_query($db,$selectSQL);
                        $res=mysqli_fetch_array($resultat);
                        $s=mysqli_num_rows($resultat);

                        if($s>0){
                            $date_liv=   $res['date_liv'];
                            $date_charg=   $res['date_charg'];

                    ?>

                 
                    <div class="form-group">
                                <b class="txt-bordure sections-title">Expéditeur</b>

                                <div class="col-md-12 ">Entreprise : <?php echo $res['r_s']; ?></div>

                                <div class="col-md-12 ">E-mail : <?php echo $res['email']; ?></div>
                                <div class="col-md-12 ">Télephone : <?php echo $res['telephone']; ?></div>


                            </div>
                        <br>
                        <br>
                        <div class="form-group">
                                <b style="    font-size: 20px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #19b835;
    width: 100% !important;">Détail de l’offre</b>

                            </div>

                            <div class="res-flx img_lg">
                        <img src="./img/uploaded/<?php echo $res['img_march']; ?>">
                    </div>
                    <div class="col-md-12">Marchandise : <?php echo $res['marchandise']; ?></div>
                    <div class="col-md-12">Emballage : <?php echo $res['emballage']; ?></div>
                  
                    <div class="col-md-12">Nombre de Colis : <?php echo $res['nb_colis']; ?></div>
                   

                   
                    <div class="col-md-12">Détails sur la Marchandise : <?php echo $res['details_march']; ?></div>
                    <div class="col-md-12">Type de véhicule : Camion
                        <?php echo $res['type_vehicule'].'  '.$res['poid']; ?></div>
                        <div class="col-md-12">Nombre de véhicules : <?php echo $res['nb_vehicules']; ?></div>

                    <div class="col-md-12">Adresse Chargement :
                        <?php echo $res['adresse_charg'].' , '.$res['ville_charg'].' , '.$res['pays_charg']; ?></div>
                    <div class="col-md-12">Date Chargement : <?php echo $res['date_charg']; ?></div>
                    <div class="col-md-12">Tolérence au retard Chargement :
                        <?php if($res['tol_charg']==1){ echo $res['jr_retard2']." jour(s)"; } else{echo "Non";} ?></div>

                    <div class="col-md-12">Adresse Livraison :
                        <?php echo $res['adresse_liv'].' , '.$res['ville_liv'].' , '.$res['pays_liv']; ?></div>
                    <div class="col-md-12">Date d'arrivée au plus tard : <?php echo $res['date_liv']; ?></div>
                    <div class="col-md-12">Tolérence au retard Livraison :
                        <?php if($res['tol_liv']==1){ echo  $res['jr_retard']." jour(s)"; } else{echo "Non";} ?></div>

                    <div class="col-md-12">Prix
                        proposé:<?php if(($res['prix_prop']=="") OR ($res['prix_prop']==" ")){ echo " N'est pas indiqué"; } else{echo $res['prix_prop'];} ?>
                    </div>
                    <div class="col-md-12">Valeur de la
                        Marchandise:<?php if(($res['valeurm']=="") OR ($res['valeurm']==" ")){ echo " N'est pas indiqué"; } else{echo $res['valeurm'];} ?>
                    </div>
                    <div class="col-md-12">Avance:<?php if(($res['avance']=="") OR ($res['avance']==" ")){ echo " N'est pas indiqué"; } else{echo $res['avance'];} ?>
                    </div>
                    <div class="col-md-12">Méthode de payement:<?php if(($res['methodepayement']=="") OR ($res['methodepayement']==" ")){ echo " N'est pas indiqué"; } else{echo $res['methodepayement'];} ?>
                    </div>

                    <div class="col-md-12">Autres informations:<?php if(($res['autre_info']=="") OR ($res['autre_info']==" ")){ echo ""; } else{echo $res['autre_info'];} ?>
                    </div>
                    <br>
                        <br>
                     
                                <b style="    font-size: 15px;
    font-weight: 200;
    margin-bottom: 20px;
    color: #19b835;
    width: 100% !important;" >Personne à contacter</b>
 <div class="col-md-12">Nom & Prénom  :<?php echo ($res['contact_name']==""||$res['contact_name']==" ")?($res['prenom']." ".$res['nom']):$res['contact_name']; ?></div>
                            <div class="col-md-12">Numéro de téléphone :<a href="tel:<?php echo  ($res['contact_phone']==""||$res['contact_phone']==" ")?($res['prenom']." ".$res['nom']):$res['contact_phone'] ; ?>"><i
                                    class="fa fa-phone"></i><?php echo  ($res['contact_phone']==""||$res['contact_phone']==" ")?($res['telephone']):$res['contact_phone'] ; ?></a></div>
                    <div class="col-md-12"><a href="invoice2.php?id_charg=<?php echo $_GET['id_charg']; ?>">Consulter
                                la fiche du Chargement</a> <br>
                            <a href="invoice1.php?id_charg=<?php echo $_GET['id_charg']; ?>">Consulter
                                les fiches de transport</a>
                </div>

                </div>
            </div>

            <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']!='admin'){
                                        ?>



            <div class="col-md-6">
                <div class="contact-map">




                    <h3 class="txt-bordure sections-title">Postuler</h3>
                    <div class="col-md-12">
                        <div class="contact-map">
                            <!-- <div class="form-group">
                                <b>Contactez Telefret</b>

                                <div class="col-md-12 "></div>
                                <div class="col-md-12 ">E-mail : commercial@telefret.com</div>
                                <div class="col-md-12 ">+237 655 767 535</div>


                            </div> -->
                            <div class="form-group">
                                <form id="postuler" action="post-postuler.php" method="POST">

                                    <div class="row">
                                        <input id="id_chargement" hidden name="id_chargement"
                                            value="<?php echo  $id_charg; ?>" type="number">

                                            <input id="to_telephone" hidden name="to_telephone"
                                            value="<?php echo  $res['telephone']; ?>" >
                                            <input id="mail" hidden name="mail"
                                            value="<?php echo  $res['email']; ?>" >

                                        <?php
 $telephone=$_SESSION['telephone'];

$vehiculedispo="SELECT * FROM abonnements WHERE telephone='$telephone' and id_abonnement NOT  IN (SELECT ab.id_abonnement FROM abonnements ab, chargement ch, chargement_vehicules chv  WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
ch.id_charg=chv.id_chargement and ch.status=0 and ( ( STR_TO_DATE( '$date_charg' , '%d/%m/%Y' )>=STR_TO_DATE( ch.date_charg , '%d/%m/%Y' ) and STR_TO_DATE( ch.date_liv , '%d/%m/%Y' )>=STR_TO_DATE( '$date_charg'  , '%d/%m/%Y' ) ) or  ( STR_TO_DATE( '$date_liv' , '%d/%m/%Y' )>=STR_TO_DATE( ch.date_charg , '%d/%m/%Y' ) and STR_TO_DATE( ch.date_liv , '%d/%m/%Y' )>=STR_TO_DATE( '$date_liv'  , '%d/%m/%Y' ) )
or  ( STR_TO_DATE( '$date_liv' , '%d/%m/%Y' )>=STR_TO_DATE( ch.date_liv , '%d/%m/%Y' ) and STR_TO_DATE( ch.date_charg , '%d/%m/%Y' )<=STR_TO_DATE( '$date_liv'  , '%d/%m/%Y' ) )
) ) ORDER BY id_abonnement DESC;
";

$result = mysqli_query($db,$vehiculedispo);

?>
                                        <div class="col-md-12 padding-12">
                                            <label>Sélectionner les véhicules:</label>

                                            <select style="height: 50px;" type="text" id="vehicules" name="vehicules[]"
                                                multiple placeholder="Pays *" required>
                                                <option value="Select School">Selectionner les véhicules</option>
                                                <?php
    while ($row = mysqli_fetch_array($result)) {
        $idab=";".$row['id_abonnement'];

        $vehiculedispoused="SELECT * FROM `postuler` WHERE `id_chargement`=$id_charg AND `vehicules` LIKE '%$idab%';";

$resultused = mysqli_query($db,$vehiculedispoused);
$sused=mysqli_num_rows($resultused);

        echo "<option value='" . $row['id_abonnement'] . "'  ".($sused>0?"disabled":"")."  ".($sused>0?" style=\"background-color: #f39797;\"":"")."  >'" . $row['matricule'] . "'</option>";
    }
    ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12 padding-12">

<label>Devise:</label>

<select style="height: 50px;" type="text" id="vehicules" name="devise" required>
                                                <option value="FCFA">FCFA</option>
                                                <option value="EURO">EURO</option>

                                                </select>
                                            </div>
                                        <div class="col-md-12 padding-12">

                                            <label>Montant proposer:</label>

                                            <input id="montant" name="montant" type="number">
                                        </div>
                                        <div class="col-md-12 padding-12">

                                            <label>Voulez vous une avance?:</label>

                                            <input id="avance" name="avance" type="number">
                                        </div>

                                        <div class="col-md-12 padding-12">
                                        <label>Informations supplémentaires:</label>

                                            <textarea name="message" class="form-control" rows="6" required=""
                                                placeholder="Votre Message">
                                             </textarea>
                                         
                                        </div>
                                    </div>
                            </div>


                            <div class="form-group text-area">

                            </div>
                            <!-- <div class="g-recaptcha" data-sitekey="6LfAXwoaAAAAAL4Bp-qVHLhXLzBW-uYcUykT9592" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>  -->

                            <button type="submit" class="btn btn-primary pull-right">Soumissionner
                            </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>



        </div><?php }}?>

        <?php if($res['contact_name']!=""){?>
        <div class="row" style="margin-top:30px;">
            <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin'){
                                        ?>
            <div class="col-md-6">
                <div class="contact-map">
                    <h3 class="txt-bordure sections-title">Personne à contacter </h3>
                    <div class="container no-padding">

                        <div class="col-md-12 no-padding">Nom & Prénom du contact : <?php echo ($res['contact_name']==""||$res['contact_name']==" ")?($res['prenom']." ".$res['nom']):$res['contact_name']; ?>
                        </div>
                        <div class="col-md-12 no-padding">Numéro de téléphone du contact :
                            <?php echo $res['contact_phone']; ?> <a href="tel:<?php echo  ($res['contact_phone']==""||$res['contact_phone']==" ")?($res['prenom']." ".$res['nom']):$res['contact_phone'] ; ?>"><i
                                    class="fa fa-phone"></i></a></div>
                        <div class="col-md-12 no-padding">Nom du client : <?php echo $res['nom'].' '.$res['prenom'];  ?>
                        </div>
                        <div class="col-md-12 no-padding">Numero du client :<?php  echo $res['telephone']; ?></div>
                        <div class="col-md-12 no-padding">Email : <a
                                href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?> </a></div>

                    </div>
                </div>
            </div> <?php }}?><?php }

else {    ?>
            <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']=='admin'){
                                        ?>
            <div class="col-md-6">
                <div class="contact-map">
                    <h3 class="txt-bordure sections-title">Contact client </h3>
                    <div class="container no-padding">
                        <div class="col-md-12 no-padding">Nom du client : <?php echo $res['nom'].' '.$res['prenom'];  ?>
                        </div>
                        <div class="col-md-12 no-padding">Numero du client :<?php  echo $res['telephone']; ?></div>
                        <div class="col-md-12 no-padding">Email : <a
                                href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?> </a></div>
                    </div>
                </div>
            </div>

            <?php }}?>
            <?php }	?>


        </div>
        <?php
		}
		else{
			echo " Il faut choisir un Chargement !";
		}
	?>
</section>

<?php include"footer.php" ?>