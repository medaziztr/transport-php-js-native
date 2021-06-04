<?php include"header.php" ?>

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
            <img src="img/slider/transport1.jpg" alt="Hero Slide">
            <!--Slide Image-->

            <div class="container hidden-xs slide-bord">
                <div class="carousel-caption demo-slides">
                    <div class="animated lightSpeedIn slide-title">Telefret</div>
                    <p class="lead animated lightSpeedIn fff">TELEFRET est un puissant vecteur de communication pour faire connaître vos services et accroître de manière significative votre visibilité au sein de la chaîne logistique en Afrique et dans le monde.</p>
                    
                    <?php if(!isset($_SESSION['login_user'])) { ?>
                    
                    <p><a class="lead animated lightSpeedIn pull-right vert-f btn-insc" data-toggle="modal" data-target="#inscription" href="#">Inscrivez Vous</a></p>
                    
                    <?php } ?>
                    
                </div>
            </div>
			
			<div class="container submenu">
                <div class="slide-title"><a href="espace-transporteur.php">Espace transporteurs</a></div>
                <div class="slide-title"><a href="espace-client.php">Espace Expéditeurs</a></div>
                <div class="slide-title"><a href="contact.php">Contactez-Nous</a></div>
            </div>
			
			
        </div>

        <div class="item">
            <img src="img/slider/transport4.jpg" alt="Hero Slide">
            <!--Slide Image-->

            <div class="container hidden-xs slide-bord">
                <div class="carousel-caption demo-slides">
                    <div class="animated lightSpeedIn slide-title">Telefret</div>
                    <p class="lead animated lightSpeedIn fff">En limitant les intermédiaires et en trouvant les meilleures combinaisons de flux, nous réduisons vos coûts.</p><br>
                    <?php if(!isset($_SESSION['login_user'])) { ?>
                    
                    <p><a class="lead animated lightSpeedIn pull-right vert-f btn-insc" data-toggle="modal" data-target="#inscription" href="#">Inscrivez Vous</a></p>
                    
                    <?php } ?>
                </div>
            </div>
			
			<div class="container submenu">
                <div class="slide-title"><a href="espace-transporteur.php">Espace transporteurs</a></div>
                <div class="slide-title"><a href="espace-client.php">Espace Expéditeurs</a></div>
                <div class="slide-title"><a href="contact.php">Contactez-Nous</a></div>
            </div>
        </div>

        <div class="item">
            <img src="img/slider/transport3.jpg" alt="Hero Slide">
            <!--Slide Image-->

            <div class="container hidden-xs slide-bord">
                <div class="carousel-caption demo-slides">
                    <div class="animated lightSpeedIn slide-title">Le temps c&#39;est de l&#39;argent</div>
                    <p class="lead animated lightSpeedIn fff">Fini le temps de la prospection coûteuse et chronophage! En quelques clics, accédez à un vaste réseau de clients potentiels et de prestataires de confiance et contactez-les via notre interface.</p><br>
                    
                    <?php if(!isset($_SESSION['login_user'])) { ?>
                    
                    <p><a class="lead animated lightSpeedIn pull-right vert-f btn-insc" data-toggle="modal" data-target="#inscription" href="#">Inscrivez Vous</a></p>
                    
                    <?php } ?>
                    
                </div>
            </div>
			<div class="container submenu">
                <div class="slide-title"><a href="espace-transporteur.php">Espace transporteurs</a></div>
                <div class="slide-title"><a href="espace-client.php">Espace Expéditeurs</a></div>
                <div class="slide-title"><a href="contact.php">Contactez-Nous</a></div>
            </div>
        </div>
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
											    	  <h3>  <p style="color:#00FF00;"> Pensez Transport, Pensez  TELEFRET! </p></h3><!--<h3 class="sections-title"></h3>-->
                                                    <br>
                                                    <p><a href="http://telefret.com">TELEFRET.COM </a>est un intermédiaire digital qui met en relation dans un espace commun des expéditeurs et des transporteurs afin de faciliter leur interaction.</p>
                                                    
                                                    <p>C’est  une véritable  place de marché sur internet qui permet concrètement aux transporteurs abonnés d’optimiser son parc de camion en limitant le retour à vide ou les chargements incomplets.</p>

                                                    
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

                    <!--<section  class="">
                        <div>
                            <iframe src="https://www.youtube.com/embed/fRQjDt7w8n4"frameborder="0" allowfullscreen class="video"> </iframe>
                        </div>
                    </section>-->
					

					<section class="why-us-setion">
			        	<div class="container">
			              <div class="row text-center">
			                <div class="col-xs-12">
			                  <span class="section-sub sections-title">Principes & etapes de fonctionnalités</span>
                                <br>
                                <br>
			                  <p>Comment ça marche ? Voici les étapes à suivre.</p>
			                </div>
			              </div> <!-- /.row -->

			              <div class="row ">
			              	<div class="col-md-12">
								<div class="css-tab" role="tabpanel">

								  <!-- Nav tabs -->
								  <ul class="nav nav-tabs" role="tablist">
								    
                                      <li role="pub-ann" class="active" ><a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i> Publier votre annonce</a></li>
                                      
                                      <li role="choix"><a href="#choix" aria-controls="choix" role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i> Chercher l'offre</a></li>
								    
                                      <li role="services"><a href="#services" aria-controls="services" role="tab" data-toggle="tab"><i class="flaticon-logistics16"></i> Choisir l'offre</a></li>
								    
                                      <li role="evaluez"><a href="#evaluez" aria-controls="evaluez" role="tab" data-toggle="tab"><i class="flaticon-broken43"></i> Evaluer</a></li>
								  </ul>

								  <!-- Tab panes -->
								  <div class="tab-content">
								    <div role="tabpanel" class="tab-pane active fade in" id="pub-ann">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="img/rest-4.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	<h3 class="desc-title">Publier votre annonce</h3>

											    	<p class="desc-cont">Vous souhaitez expédier des colis, transporter une marchandise ou effectuer un déménagement, publiez votre demande sur <a href="http://telefret.com">TELEFRET.COM </a>.</p>
                                                    <p class="desc-cont">Publier votre annonce de chez vous via n’importe quel support (Ordinateur, Tablette, téléphone...)</p> 
										    	</div><!-- /.col-md-6 -->
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
									    </div><!-- /.css-tab-content -->
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
								    		<p>Rien à dire, je suis avec eux  depuis le début j'ai toujours reçu <br>sans problème mes effets. Il font tous pour respecter <br> les délais qu'ils annoncent. A recommander.</p>
								    		<span class="client-title">- Mamadou Angoua -</span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								    <div class="item">
								    	<div class="testimonial-content">
                                            <div class="avatar-cl"><img src="./img/client/client-2.jpg"></div>
								    		<p>Voilà maintenant plusieurs années que je travaille avec la société<br> TELEFRET je n'ai jamais eu de problème de colis et même pour l'envoi de mes véhicules.<br> Très bon je vous conseille.</p>
								    		<span class="client-title">- Diane solo -</span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								    <div class="item">
								    	<div class="testimonial-content">
                                            <div class="avatar-cl"><img src="./img/client/client-3.jpg"></div>
								    		<p>Société très sérieuse dans l'ensemble rien à <br>dire mes colis sont arrivés comme prévue.<br> Merci TELEFRET</p>
								    		<span class="client-title">- Kouamé Ngu -</span>
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

                    <section class="packs-setion testimonial-section">
                        <div class="container flxrow">
                            <div class="row text-center">
                            <div class="col-xs-12">
                              <span class="section-sub sections-title">Nos Avantages</span>
                                <br>
                                <br>
                              <p>Pourquoi choisir TELEFRET ?</p>
                            </div>
                          </div>
                            <div class="col-xs-12"></div>
                            <div class="pack">
                                <form class="form">
                                    <div class="head-pack h30">Sécurité</div>
                                    <div class="img-pack"><img src="img/securite.png"/></div>
                                    <div class="cont-pack">
                                        <span class="txt-pack">Ne confiez plus vos marchandises aux inconnus. Sur telefret.com, tous les transporteurs sont identifiés. Aussi, suivez vos expéditions en temps réel via le tracking system.</span>
                                    </div>
                                </form>
                            </div>
                            <div class="pack">
                                <form class="form">
                                    <div class="head-pack h30">Optimisez votre flotte</div>
                                    <div class="img-pack"><img src="img/performance.png"/></div>
                                    <div class="cont-pack">
                                        <span class="txt-pack">Fini les retours à vide et les camions immobilisés. Rejoignez telefret.com et trouvez en un clic des milliers d’expéditeurs partout au Cameroun et dans le monde.</span>
                                    </div>
                                </form>
                            </div>
                            <div class="pack">
                                <form class="form">
                                    <div class="head-pack h30">Facile</div>
                                    <div class="img-pack"><img src="img/easy.png"/></div>
                                    <div class="cont-pack">
                                        <span class="txt-pack">En déplacement? Au bureau ? Ne vous gênez pas : pilotez toutes vos opérations d’expédition depuis votre smartphone, tablette ou ordinateur.</span>
                                    </div>
                                </form>
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

<?php include"footer.php" ?>