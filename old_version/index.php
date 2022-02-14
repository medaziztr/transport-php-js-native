<?php include"header.php" ?>
<style>
	.suivieform{
		width:30%;
	}
	@media screen and (max-width: 768px){
		.suivieform{
		width:90%;
	}
}
</style>
<section class="page-title-section trouvtrans show-xs hidden-md hidden-sm hidden-lg hidden-xs">
    <div class="container hidden-xs slide-bord">
    </div>
</section>

<div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators hidden-xs">
        <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#main-carousel" data-slide-to="1"></li>
        <li data-target="#main-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/slider/Transport6.jpeg" alt="Hero Slide">
            <!--Slide Image-->

            <div class="container hidden-xs slide-bord">
                <div class="carousel-caption demo-slides">
                    <div class="animated lightSpeedIn slide-title">Telefret</div>
                    <p class="lead animated lightSpeedIn fff">TELEFRET est un puissant vecteur de communication pour faire connaître vos services et accroître de manière significative votre visibilité au sein de la chaîne logistique en Afrique et dans le monde.</p><br><br>
                    
                    <?php if(!isset($_SESSION['login_user'])) { ?>
                    
                    <p><a class="lead animated lightSpeedIn pull-right vert-f btn-insc" data-toggle="modal" data-target="#inscription" href="#">Inscrivez Vous</a></p>
                    
                    <?php } ?>
                    
                </div>
               <br><br><font size="6"><center> <p style="color:#ffffff"; >NOUS RÉINVENTONS L’EXPÉRIENCE TRANSPORT DES MARCHANDISES EN AFRIQUE</p></center></font>
            </div>
			
			<div class="container submenu">
                <div class="slide-title"><a href="espace-transporteur.php">
                Espace transporteurs</a></div>
                <div class="slide-title"><a href="espace-client.php">Espace Expéditeurs</a></div>
                <div class="slide-title"><a href="contact.php">Contactez-Nous</a></div>
            </div>
			
			
        </div>

        <div class="item">
            <img src="img/slider/Transport7.jpg" alt="Hero Slide">
            <!--Slide Image-->

            <div class="container hidden-xs slide-bord">
                <div class="carousel-caption demo-slides">
                    <div class="animated lightSpeedIn slide-title">Telefret</div>
                    <p class="lead animated lightSpeedIn fff">En limitant les intermédiaires et en trouvant les meilleures combinaisons de flux, nous réduisons vos coûts.</p><br>
                    <?php if(!isset($_SESSION['login_user'])) { ?>
                    
                    <p><a class="lead animated lightSpeedIn pull-right vert-f btn-insc" data-toggle="modal" data-target="#inscription" href="#">Inscrivez Vous</a></p>
                    
                    <?php } ?>
                </div>
                <br><br><br><br><br><font size="6"><center> <p style="color:#FFFFFF"; >NOUS RÉINVENTONS L’EXPÉRIENCE TRANSPORT DES MARCHANDISES EN AFRIQUE</p></center></font>
            </div>
			
			<div class="container submenu">
                <div class="slide-title"><a href="espace-transporteur.php">Espace transporteurs</a></div>
                <div class="slide-title"><a href="espace-client.php">Espace Expéditeurs</a></div>
                <div class="slide-title"><a href="contact.php">Contactez-Nous</a></div>
            </div>
        </div>

        <div class="item">
            <img src="img/slider/Transport8.jpg" alt="Hero Slide">
            <!--Slide Image-->

            <div class="container hidden-xs slide-bord">
                <div class="carousel-caption demo-slides">
                    <div class="animated lightSpeedIn slide-title">Le temps c&#39;est de l&#39;argent</div>
                    <p class="lead animated lightSpeedIn fff">Fini le temps de la prospection coûteuse et chronophage! En quelques clics, accédez à un vaste réseau de clients potentiels et de prestataires de confiance et contactez-les via notre interface.</p><br>
                    
                    <?php if(!isset($_SESSION['login_user'])) { ?>
                    
                    <p><a class="lead animated lightSpeedIn pull-right vert-f btn-insc" data-toggle="modal" data-target="#inscription" href="#">Inscrivez Vous</a></p>
                    
                    <?php } ?>
                    
                </div>
                <br><br><br><br><font size="6"><center> <p style="color:#FFFFFF"; >NOUS RÉINVENTONS L’EXPÉRIENCE TRANSPORT DES MARCHANDISES EN AFRIQUE</p></center></font>
            </div>
			<div class="container submenu">
                <div class="slide-title"><a href="espace-transporteur.php">Espace transporteurs</a></div>
                <div class="slide-title"><a href="espace-client.php">Espace Expéditeurs</a></div>
                <div class="slide-title"><a href="contact.php">Contactez-Nous</a></div>
            </div>
        </div>
		<rs-mask-wrap class="suivieform" style="position: absolute; display: block; overflow: visible;top:17%;left: 50%;
    transform: translate(-50%, 0); ">
		<rs-layer id="slider-1-slide-1-layer-7" class="rs-layer-static rs-layer" data-type="text"
		 data-rsp_ch="on" data-xy="xo:2px,1px,0,19px;yo:103px,90px,68px,86px;" 
		 data-text="w:normal;s:20,17,12,24;l:25,21,15,26;fw:400,400,400,700;" data-dim="w:471.233px,412px,313px,448px;" data-onslides="s:1;" data-frame_0="x:0,0,0,0px;y:0,0,0,0px;" data-frame_1="x:0,0,0,0px;y:0,0,0,0px;" data-frame_999="o:0;st:w;" style="z-index: 5; font-family: Roboto; height: auto; color: rgb(255, 255, 255);
		  text-decoration: none; white-space: normal; width: 30px; min-height: 0px; min-width: 0px; max-height: none;
		   max-width: none; text-align: left; line-height: 20px; letter-spacing: 0px; font-weight: 700; font-size:
		    19px; transform-origin: 50% 50%; opacity: 1; transform: translate(0px, 0px); visibility: visible;" data-startslide="1" 
			data-endslide="5" data-idcheck="true" data-stylerecorder="true" data-initialised="true">
			<form method="post" id="form"  data-stylerecorder="true" style="text-align: left; line-height: 20px; 
			letter-spacing: 0px; font-weight: 700; font-size: 19px;">
			<input type="text" class="" id="CODE_EXPEDITION" 
			 required="" placeholder="Saisissez le N° d'expédition" style="background-color: rgb(255, 255, 255); width:100%;height:45px;color:black!important;
			  border: 2px none rgb(234, 234, 234); border-radius: 2px; font-weight: 700; text-align: left; line-height: 20px;
			   letter-spacing: 0px; padding-left: 16px; padding-right: 16px;" data-stylerecorder="true">
<button style="float: right; width: 45px; height: 45px; padding: 0px; margin-right: 5px; border-radius: 100%; position:
 absolute; right: -20px; text-align: left; line-height: 20px; letter-spacing: 0px; font-weight: 700;    background-color: #14b760; border-color: 
 rgb(156, 191, 97); border-style: solid; border-width: 2px;" data-stylerecorder="true"><i style="font-size: 18px; height: 35px;
  line-height: 34px; width: 35px; padding-left: 8px; position: absolute; top: 5%; left: 6%; text-align: left; letter-spacing: 0px;
   font-weight: 400;" class="fa fa-search" data-stylerecorder="true"></i></button></form> 
							</rs-layer></rs-mask-wrap>
  </div>
    <!--.carousel-inner-->

    <!-- Controls -->
    <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
                    <!-- #main-carousel-->

			        <!-- why-us-setion start -->
			        <section class="why-us-setion">
			        	<div class="container col12">
			              <div class="row txt-bord">
			              	<div class="col-md-12 ">
								<div class="css-tab ">

								  <div class="tab-content">
								    
									    <div class="css-tab-content">
										    <div class="row padding-b">
										    	<div class="col-md-5 content-text">
											    	    <h3 class="sections-title">Pensez Transport, Pensez  TELEFRET!</h3>
                                                    <br>
                                                    <p style="color:black">Nous connectons tous les acteurs de la chaine logistique et d’approvisionnement notamment les transporteurs, les expéditeurs et les commissionnaires dans le but de faciliter leur interaction et accroitre leurs rendements,</p>
                                                    
                                                    <p style="color:black">Notre mission : planifier, contrôler et gérer  le flux de transport de vos marchandises  de bout à bout  et en temps réel.</p>

                                                    
										    	</div>
                                                <div class="col-md-7 ">
										    		<img src="img/monde-telefret.png" alt="">
										    	</div>
										    </div>
									    </div>
								    
								  </div>
								</div>
			              	</div>
			              </div>
			        	</div>
			        </section>

                  <!-- <section  class="">
                        <div>
                           <iframe width="560" height="315" src="https://www.youtube.com/embed/fRQjDt7w8n4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </section> -->
					

					<section class="why-us-setion">
			        	<div class="container">
			              <div class="row text-center">
			                <div class="col-xs-12">
			                  <span class="section-sub sections-title">Comment ça marche ? Voici les étapes à suivre.</span>
                                <br>
                                <br>
			                <!-- <p>Comment ça marche ? Voici les étapes à suivre .</p> -->
			                </div>
			              </div> <!-- /.row -->
                          <div class="row "> <iframe width="800" height="400" src="https://www.youtube-nocookie.com/embed/Jk_6pwISIhI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div> <br> <br>
			               <div class="row "> 
			               
			              	 <div class="col-md-12">
								<div class="css-tab" role="tabpanel">

								  <!-- Nav tabs -->
								 <!-- <ul class="nav nav-tabs" role="tablist">
								    
                                      <li role="pub-ann" class="active" ><a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i> Publier votre annonce</a></li>
                                      
                                      <li role="choix"><a href="#choix" aria-controls="choix" role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i> Chercher l'offre</a></li>
								    
                                      <li role="services"><a href="#services" aria-controls="services" role="tab" data-toggle="tab"><i class="flaticon-logistics16"></i> Choisir l'offre</a></li>
								    
                                      <li role="evaluez"><a href="#evaluez" aria-controls="evaluez" role="tab" data-toggle="tab"><i class="flaticon-broken43"></i> Evaluer</a></li>
								  </ul> -->

								  <!-- Tab panes -->
								  <div class="tab-content">
								    <div role="tabpanel" class="tab-pane active fade in" id="pub-ann">
									    <div class="css-tab-content">
										    <div class="row">
										    	<!-- <div class="col-md-6">
										    		<img src="img/rest-4.png" alt="">
										    	</div> --><!-- /.col-md-6 -->

										    	<!-- <div class="col-md-6 content-text">
											    	<h3 class="desc-title">Publier votre annonce</h3>

											    	<p class="desc-cont">Vous souhaitez expédier des colis, transporter une marchandise ou effectuer un déménagement, publiez votre demande sur <a href="http://telefret.com">TELEFRET.COM </a>.</p>
                                                    <p class="desc-cont">Publier votre annonce de chez vous via n’importe quel support (Ordinateur, Tablette, téléphone...)</p> 
										    	</div> --> <!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
                                      
								    <div role="tabpanel" class="tab-pane fade in" id="choix">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="img/rest-2.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	<h3 class="desc-title">Chercher une offre</h3>

											    	<p class="desc-cont">Consultez "Cherchez un Transporteur" / "Cherchez un chargement", et choisissez l'offre qui vous convient</p> 
											    	<p class="desc-cont">Vous aurez plus de possibilité, plus de disponibilité et plus de gains (temps & argent).</p> 
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div>  <!-- /.css-tab-content -->
								    </div>
								      
								    <div role="tabpanel" class="tab-pane fade in" id="services">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="img/rest.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	<h3 class="desc-title">Choisir une offre</h3>

											    	<p class="desc-cont">Choisissez le chargement ou vehicule qui vous convient.</p> 
											    	<p class="desc-cont">L'offre qui correspond le mieux à vos contraintes et votre budget, mais avant, prenez en compte le profil, l'expérience et la réputation de votre prestataire et contactez le transporteur / l'expéditeur en question.</p> 
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								    
                                      <div role="tabpanel" class="tab-pane fade in" id="evaluez">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="img/rest-3.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	<h3 class="desc-title">Evaluer</h3>

											    	<p class="desc-cont">Si vous êtes satisfaits, faites le savoir. Celà incitera les transporteurs professionnels. Dans le cas contraire, dites le aussi. Celà l'incitera à faire mieux la prochaine fois.</p> 
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								    
								  </div>
								</div><!-- /.css-tab -->
			              	</div><!-- /.col-md-12 -->
			              </div><!-- /.row -->

			        	</div><!-- /.container -->
			        </section>
			         <section class="packs-setion testimonial-section">
                        <div class="container flxrow">
                            <div class="row text-center">
                            <div class="col-xs-12">
                              <span class="section-sub sections-title">Pourquoi choisir TELEFRET ?</span>
                                <br>
                                <br>
                              <p></p>
                            </div>
                          </div>
                            <div class="col-xs-12"></div>
                            <div class="pack">
                                <form class="form">
                                    <div class="head-pack h30">Sécurité</div>
                                    <div class="img-pack"><img src="img/securite.png"/></div>
                                    <div class="cont-pack">
                                        <span class="txt-pack">Ne confiez plus vos marchandises aux inconnus. Chez TELEFRET, tous les transporteurs sont identifiés. Aussi, suivez vos expéditions en temps réel via le Tracking System.
Vos marchandises sont assurées par nos partenaires Assureurs et vous êtes dédommagés en cas de perte ou de vol.</span>
                                    </div>
                                </form>
                            </div>
                            <div class="pack">
                                <form class="form">
                                    <div class="head-pack h30">Optimisation</div>
                                    <div class="img-pack"><img src="img/performance.png"/></div>
                                    <div class="cont-pack">
                                        <span class="txt-pack">Accédez en un clic aux plus grands réseaux des transporteurs professionnel de la zone CEMAC et Optimisez vos couts grâce à la mutualisation et à l’aspect collaboratif de la plateforme.</span>
                                    </div>
                                </form>
                            </div>
                            <div class="pack">
                                <form class="form">
                                    <div class="head-pack h30">Dématérialisation</div>
                                    <div class="img-pack"><img src="img/easy.png"/></div>
                                    <div class="cont-pack">
                                        <span class="txt-pack">Dématérialisez vos processus de transport et accédez à vos documents (Ordre de transport, Bon de livraison, Facture…) sous format électronique en temps réel. Bénéficiez d’une vision globale grâce à notre Dashboard.</span>
                                    </div>
                                </form>
                            </div>
                            

                        </div>
                    </section>
                    <br><br>
                    
                    <section class="testimonial-section section-padding">
			            <div class="container text-center">
			              <div class="row">
			                <div class="col-xs-12">
			                  <span class="section-sub sections-title">CE QUE DISENT NOS CLIENTS</span>
			                </div>
			              </div> <!-- /.row -->

			              <div class="row row-content">
			              	<div class="col-md-12">
								<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
								    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
								    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
								    <div class="item active">
								    	<div class="testimonial-content">
                                            <div class="avatar-cl"><img src="./img/client/client-1.jpg"></div>
								    		<p>Sur suggestion d’un partenaire d’affaire, j’ai contacté TELEFRET dans le cadre d’une opération de transport des conteneurs du port autonome de Douala au Cameroun, vers BANGUI en RCA.<br> Je vous recommande cette startup car leur service est accessible en un clic et leurs offres très professionnelles.
<br>Merci encore TELEFRET pour votre disponibilité</p>
								    		<span class="client-title"> NZANGUE Rodrigue </span>
								    		<span class="client-title">Directeur General, BRAIN TRANSIT</span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								    <div class="item">
								    	<div class="testimonial-content">
                                            <div class="avatar-cl"><img src="./img/client/client-2.jpg"></div>
								    		<p>La solution innovante qui permet aux sociétés industrielles  de planifier et surveiller chaque étape de leurs expéditions  de l’usine  vers les distributeurs finaux. <br>Il  constitue l’un des moyens les plus rapides et les plus efficaces d’améliorer les performances de la chaîne d’approvisionnement.</p>
								    		<span class="client-title"> PIAM Krystel</span>
								    		<span class="client-title">Responsable Commerciale, AGRI-INDUSTRIE</span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								    <div class="item">
								    	<div class="testimonial-content">
                                            <div class="avatar-cl"><img src="./img/client/client-3.jpg"></div>
								    		<p>Nous avions découvert TELEFRET comme  un espace  de confiance dédié aux professionnels du transport routiers de marchandises.<br> Car il met à la disposition des partenaires un suivi automatisé par géolocalisation et une transmission des informations en temps réel.
<br>Nous apprécions fortement votre apport dans  la supply Chain en Afrique</p>
								    		<span class="client-title"> YMTSOP Charly </span>
								    		<span class="client-title">Responsable Logistique, SOCOPAT</span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								  </div>
								</div><!-- /.carousel -->
			              	</div><!-- /.col-md-12 -->
			              </div>
                        </div>
                    </section>
                    
                    
                    <section class="part-setion">
                        <div class="container text-center" >
			              <div class="partner-section">
				              <div class="row row-content"> 
                                <div class="col-xs-12 ">
                                    <span class="section-sub sections-title ">Ils nous font confiance</span>
                                </div>
				              	<div class="col-md-12 row-content">
									<div class="owl-carousel partner-carousel">
									    <div class="item">
									    	<a><img src="img/partner/p1.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a><img src="img/partner/p2.jpg" alt=""></a>
									    </div>
										<div class="item">
									    	<a><img src="img/partner/part.jpeg" alt=""></a>
									    </div>
									</div>


							        <div class="partner-carousel-navigation">
							            <a class="prev"><i class="fa fa-angle-left"></i></a>
							            <a class="next"><i class="fa fa-angle-right"></i></a>
							        </div>


				              	</div>
				              </div>
			              </div>
			            </div>
			        </section>

                  
					
					<?php 
						$selectSQL="SELECT * FROM pub";
						$resultat = mysqli_query($db,$selectSQL);
						$res=mysqli_fetch_array($resultat);
						$s=mysqli_num_rows($resultat); 
					?>
					<?php	if( ($res['image1']!='') OR ($res['image2']!='') OR ($res['image3']!='') ){ ?>
						<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;max-height: 500px;overflow:hidden;visibility:hidden;">
							<!-- Loading Screen -->
							<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
								<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
							</div>
							<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
								<?php	if($res['image1']!=''){ ?>
									<div>
										<img data-u="image" src="./img/pub/image1.jpg" />
									</div>
								<?php }	if($res['image2']!=''){ ?>
									<div>
										<img data-u="image" src="./img/pub/image2.jpg" />
									</div>
								<?php }	if($res['image3']!=''){ ?>
									<div>
										<img data-u="image" src="./img/pub/image3.jpg" />
									</div>
								<?php } ?>	
							</div>
						</div>
					<?php } ?>	

					<script>
						// We access to the inputs by their id's
let CODE_EXPEDITION = document.getElementById("CODE_EXPEDITION");

let contactForm = document.getElementById("form");

// Event listener
contactForm.addEventListener("submit", function (e) {
 
  
    e.preventDefault();
    window.location.assign("http://suivi.telefret.com/"+CODE_EXPEDITION.value);
  

});
					</script>

<?php include"footer.php" ?>