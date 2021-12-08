ï»¿<?php include"header.php" ?>

<section class="page-title-section consultation">
</section>
<section class="contact-info-section">
    <div class="container ">

        <div class="row content-row">

            <div class="col-md-6">
                <div class="contact-map" id="testprint">
                    <h3 class="txt-bordure sections-title">Consultez le chargement choisis</h3>
                    <?php
                        $id_charg=$_GET['id_charg'];

                        $selectSQL="SELECT * FROM chargement, transporteur WHERE id_charg='$id_charg' AND chargement.telephone=transporteur.telephone";

                        $resultat = mysqli_query($db,$selectSQL);
                        $res=mysqli_fetch_array($resultat);
                        $s=mysqli_num_rows($resultat);

                        if($s>0){
                    ?>        
                            
                    <div class="res-flx img_lg">
                        <img src="./img/uploaded/<?php echo $res['img_march']; ?>">
                    </div>
                    <div class="col-md-12">Marchandise : <?php echo $res['marchandise']; ?></div>     
                    <div class="col-md-12">Emballage : <?php echo $res['emballage']; ?></div>
                    <!-- <div class="col-md-12">Mode De Transport : <?php echo $res['mode_t']; ?></div> -->
                    <!-- <div class="col-md-12">Poids : <?php echo $res['poid'].' Tonnes'; ?></div> -->
                    <div class="col-md-12">Nombre de Colis : <?php echo $res['nb_colis']; ?></div>
                   <!-- <div class="col-md-12">Volume : <?php if($res['volume']==0){ echo "n'est pas indiqué"; } else{echo $res['volume'].' m3';} ?></div> -->
					<div class="col-md-12">Détails sur la Marchandise : <?php echo $res['details_march']; ?></div>
                    <div class="col-md-12">Type de véhicule : Camion <?php echo $res['type_vehicule'].'  '.$res['poid']; ?></div>
                    <div class="col-md-12">Adresse Chargement : <?php echo $res['adresse_charg'].' , '.$res['ville_charg'].' , '.$res['pays_charg']; ?></div>
					<div class="col-md-12">Date Chargement : <?php echo $res['date_charg']; ?></div>
					<div class="col-md-12">Tolérence au retard Chargement  : <?php if($res['tol_charg']==1){ echo $res['jr_retard2']." jour(s)"; } else{echo "Non";} ?></div>
					
                    <div class="col-md-12">Adresse Livraison : <?php echo $res['adresse_liv'].' , '.$res['ville_liv'].' , '.$res['pays_liv']; ?></div>
					<div class="col-md-12">Date d'arrivée au plus tard : <?php echo $res['date_liv']; ?></div>
					<div class="col-md-12">Tolérence au retard Livraison : <?php if($res['tol_liv']==1){ echo  $res['jr_retard']." jour(s)"; } else{echo "Non";} ?></div>	
					
                    <div class="col-md-12">Prix proposé:<?php if(($res['prix_prop']=="") OR ($res['prix_prop']==" ")){ echo " N'est pas indiqué"; } else{echo $res['prix_prop'];} ?> </div>
                    <div class="col-md-12">Valeur de la Marchandise:<?php if(($res['valeurm']=="") OR ($res['valeurm']==" ")){ echo " N'est pas indiqué"; } else{echo $res['valeurm'];} ?> </div>
                    <div class="col-md-12"><a href="#" onclick="PrintElem('testprint')">Imprimer Chargement</a></div>
				
                </div>
            </div>
            
		<?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                
                                                if ($_SESSION['type']!='admin'){
                                        ?> 	
			
            <div class="col-md-6">
                <div class="contact-map">
                    <h3 class="txt-bordure sections-title">Contactez Telefret</h3>   
                    <div class="">

                        <div class="col-md-12 "></div>
                        <div class="col-md-12 ">E-mail : commercial@telefret.com</div>
                        <div class="col-md-12 ">+237 655 767 535</div>
                        

                    </div>
                    <div class="col-md-12">
                        <div class="contact-map">
                            <form id="mainContact" action="sendemails.php?mail=commercial@telefret.com" method="POST">

                                <div class="form-group">
                                    <div class="row">         
                                        
                                        <div class="col-md-12 no-padding">
                                            <input name="sujet" type="text" class="form-control" placeholder="Sujet">
                                        </div>
                                        <div class="col-md-12 padding-12">
                                            <textarea name="message" class="form-control" rows="6" required="" placeholder="Votre Message">
                                             </textarea>
                                             <input id="telephone" name="telephone" type="hidden" value="<?php echo $res['email']; ?>">
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group text-area">

                                </div>

                                <button type="submit" class="btn btn-primary pull-right">ENVOYER</button>
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
                                               
						<div class="col-md-12 no-padding">Nom & Prénom du contact : <?php echo $res['contact_name']; ?></div>
						<div class="col-md-12 no-padding">Numéro de téléphone du contact : <?php echo $res['contact_phone']; ?> <a href="tel:<?php echo $res['contact_phone']; ?>"><i class="fa fa-phone"></i></a></div>
						 <div class="col-md-12 no-padding">Nom  du client : <?php echo $res['nom'].' '.$res['prenom'];  ?></div>
                                                <div class="col-md-12 no-padding">Numero  du client :<?php  echo $res['telephone']; ?></div>
                                                <div class="col-md-12 no-padding">Email : <a href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?> </a></div>
						
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
 <div class="col-md-12 no-padding">Nom  du client : <?php echo $res['nom'].' '.$res['prenom'];  ?></div>
                                                <div class="col-md-12 no-padding">Numero  du client :<?php  echo $res['telephone']; ?></div>
                                                <div class="col-md-12 no-padding">Email : <a href="mailto:<?php echo $res['email']; ?>"><?php echo $res['email']; ?> </a></div>
												</div></div>
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