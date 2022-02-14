<?php include"header.php" ?>

<?php

    extract($_POST,EXTR_OVERWRITE);
        
        $today =   strtotime(date('d-m-Y')) ;

        $editFormAction = $_SERVER['PHP_SELF'];
        if (isset($_SERVER['QUERY_STRING'])) {
          $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
        }
        
        if (empty($_POST['gps'])){
            $gps="off";
        }
        
        if (empty($_POST['prix'])){
            $prix="off";
        }

        $filtre = "1=1" ;

     if (!empty($_POST)){

        if($dat_dep!=""){
           $filtre.=" AND STR_TO_DATE(`date_dep`, '%d/%m/%Y') >= '$dat_dep'";
        }

        if($dat_limite!=""){
            $filtre.=" AND STR_TO_DATE(`date_dep`, '%d/%m/%Y') <= '$dat_limite'";
        }

        if($gps=="on"){
            $filtre.=" AND gps=1";
        }

        if($poid!=""){
            $filtre.=" AND poid_disp>'$poid'";
        }

        if($pays_dep!="off"){
            $filtre.=" AND pays_dep='$pays_dep'";
        }
        
        if($ville_dep!="off"){
            $filtre.=" AND ville_dep='$ville_dep'";
        }
        
        if($pays_arr!="off"){
            $filtre.=" AND pays_arr='$pays_arr'";
        }
        
        if($ville_arr!="off"){
            $filtre.=" AND ville_arr='$ville_arr'";
        }
        
     }

?>

<section class="page-title-section trouvtrans">
    <div class="container hidden-xs slide-bord">
        <div class="demo-slides">
            <div class="animated lightSpeedIn slide-title">Trouver un transporteur</div>
            <p class="lead animated lightSpeedIn">Veuillez remplir les criteres suivants</p>
        </div>
    </div>
</section>

<section class="contact-info-section ">
    <div class=" ">
        <div class="row ">
            <div class="">
                <div class="css-tab" role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="pub-ann" class="active">
                            <a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab"> Cherchez Un
                                Transporteur</a>
                        </li>

                        <li role="choix" class="">
                            <a href="#choix" aria-controls="choix" role="tab" data-toggle="tab">Annoncer votre
                                chargement</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">


                        <div role="tabpanel" class="tab-pane fade in active" id="pub-ann">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">
                                    <div class="css-tab-content formulaires">
                                        
                                    </div>
									<div>


									
                                    <div class="container result-rech">


                                    <!-- Custom Filter -->

                                    <div class="css-tab-content formulaires">

                                        <div class="container" style="padding-left: unset !important;">
                                            <div class="col-md-6 formulaire">

                                                <h3 class="txt-bordure sections-title">Depart</h3>

                                                <div class="form-group">
                                                    <div class="row">

                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                            <select type="text" name="pays_dep" id="pays2"
                                                                placeholder="Pays *" required>
                                                                <option value="" selected> Tout</option>

                                                                <option value="Cameroun" 
                                                                    style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                                    Cameroun</option>
                                                                <option value="Congo"
                                                                    style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                                                    Congo</option>
                                                                <option value="Gabon"
                                                                    style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                                    Gabon</option>
                                                                <option value="Tchad"
                                                                    style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                                    Tchad</option>
                                                                <option value="Republique centrafricaine"
                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                    Republique centrafricaine</option>
                                                                <option value="Guinee equatoriale"
                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                    Guinee equatoriale</option>
                                                                
                                                            </select>

                                                        </div>
                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                            <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                            <input type="text" name="ville_dep" id="villed"
                                                                placeholder="Ville de Chargement">
                                                            </div>
                                                        <!-- <div class="col-sm-4 col-xs-12 no-padding">
                                                            <input type="date" name="ville_dep" id="dated"
                                                                placeholder="dated">
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 formulaire" style="margin: left 5px;">
                                                <h3 class="txt-bordure sections-title">Arrivee</h3>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4 col-xs-12 no-padding">

                                                            <select type="text" name="pays_arr" id="pays3"
                                                                placeholder="Pays *" required>
                                                                <option value="" selected> Tout</option>

                                                                <option value="Cameroun" 
                                                                    style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                                    Cameroun</option>
                                                                <option value="Congo"
                                                                    style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                                                    Congo</option>
                                                                <option value="Gabon"
                                                                    style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                                    Gabon</option>
                                                                <option value="Tchad"
                                                                    style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                                    Tchad</option>
                                                                <option value="Republique centrafricaine"
                                                                    style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                    Republique centrafricaine</option>
                                                                <option value="Guinee equatoriale"
                                                                    style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                    Guinee equatoriale</option>
                                                                
                                                            </select>

                                                        </div>
                                                        <div class="col-sm-4 col-xs-12 no-padding">
                                                            <input type="text" name="ville_arr" id="villef"
                                                                style="width: 100%; border-width: 5px;"
                                                                placeholder="Ville de livraison" />
                                                            <div id="suggestions-container"
                                                                style="position: relative;"></div>
                                                        </div>
                                                        <!-- <div class="col-sm-4 col-xs-12 no-padding">
                                                            <input type="date" name="datef" id="datef"
                                                                placeholder="datef">
                                                        </div> -->

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        </form>
                                    </div>

                                    <!-- Table -->
                                    <table id='empTable1' class='display dataTable'>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Type de véhicule</th>
                                                <th>Départ</th>
                                                <th>Arrivée</th>
                                                <th>Poids disponible</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>

                                <!-- Script -->
                                <script>
                                $(document).ready(function() {
                                    var dataTable = $('#empTable1').DataTable({
                                        'processing': true,
                                        'serverSide': true,
                                        'serverMethod': 'post',
                                        //'searching': false, // Remove default Search Control
                                        'ajax': {
                                            'url': 'ajaxfile4.php',
                                            'data': function(data) {
                                                // Read values
                                                var gender = $('#pays2').val();
                                                var name = $('#pays3').val();
                                                var villed = $('#villed').val();
                                                var villef = $('#villef').val();
                                                // var dated = $('#dated').val();
                                                // var datef = $('#datef').val();

                                                // Append to data
                                                data.pays2 = gender;
                                                data.pays3 = name;
                                                data.villed = villed;
                                                data.villef = villef;
												data.now = "true";

                                                // data.dated = dated;
                                                // data.datef = datef;


                                            }
                                        },
                                        'success': function(data) {
                                            console.log(data)
                                        },
                                        'error': function(data) {
                                            console.log(data)
                                        },
                                        "createdRow": function(row, data, dataIndex) {
                                            console.log(data.date_arr, new Date(data.date_arr
                                                .split("/")[1] +
                                                "/" + data.date_arr.split("/")[0] +
                                                "/" + data.date_arr
                                                .split("/")[2]))

                                            if (data.date_arr && (new Date(data.date_arr.split(
                                                        "/")[1] + "/" +
                                                    data.date_arr.split("/")[0] + "/" + data
                                                    .date_arr.split(
                                                        "/")[2]) > new Date())) {

                                                $(row).addClass('testclassvalid');

                                            } else {
                                                $(row).addClass('testclass');
                                            }


                                        },
                                        'columns': [

                                            {
                                                "mData": "img_vehicule",
                                                "mRender": function(data, type, row) {
                                                    return `<div 

class="res-flx-s img-avatar-sm">
<img src="./img/uploaded/${data ? data : 'logo.png'}">
`
                                                },

                                            },
                                            {
                                                data: 'type_vehicule'
                                            },
                                            {
                                                "mData": "ville_dep",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return row.ville_dep + ", " + row
                                                        .pays_dep + ", " +
                                                        row.date_dep;
                                                }
                                            }, {
                                                "mData": "pays_dep",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return row.ville_arr + ", " + row
                                                        .pays_arr + ", " + row
                                                        .date_arr;
                                                }
                                            },
											{
                                                "mData": "poid_disp",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return row.poid_disp + "Tonnes ";
                                                }
                                            },
                                            {
                                                "mData": "telephone",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return `

<input type="submit" value="Consultez"
                                                onclick="location.href='disponibilite.php?id_disp=${ row.id_disp}'  " 
												<?php 
                                                    if(!isset($_SESSION['login_user'])) { 
                                                        echo "disabled" ;  
                                                    }  
                                                   ?>
												>
`;
                                                }
                                            }
                                        ],
                                        dom: 'Bfrtip',
                                        buttons: [
                                            //'copyHtml5',
                                            'excelHtml5',
                                            //'csvHtml5',
                                            'pdfHtml5'
                                        ]
                                    });
                                    dataTable.buttons().container()
                                        .appendTo('#example_wrapper .col-sm-6:eq(0)');

                                    $('#villed').change(function() {
                                        dataTable.draw();
                                    });
                                    $('#villef').change(function() {
                                        dataTable.draw();
                                    });
                                    $('#dated').change(function() {

                                        dataTable.draw();
                                    });
                                    $('#datef').change(function() {
                                        dataTable.draw();
                                    });
                                    $('#pays3').change(function() {
                                        dataTable.draw();
                                    });

                                    $('#pays2').change(function() {
                                        dataTable.draw();
                                    });
                                });
                                </script>


									</div>

                                   
                                </div>
                            </div>
                        </div>



                        <div role="tabpanel" class="tab-pane fade in" id="choix">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">
                                    <div class="css-tab-content formulaires">
                                        <form id="form1" action="post-charg.php" method="POST"
                                            enctype="multipart/form-data">
                                            <div class="container">
                                                <div class="col-md-8 col-xs-12 formulaire">
                                                    <h3 class="txt-bordure sections-title">Caracteristiques</h3>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                                de Marchandise </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <select class="form-control" id="" name="marchandise"
                                                                    required>
                                                                    <optgroup label="Selectionnez type marchandise">
                                                                        <option value="Demenagement">Demenagement
                                                                        </option>
                                                                        <option value="Produit alimentaires">Produit
                                                                            alimentaires</option>
                                                                        <option value="Materiaux De Construction">
                                                                            Materiaux De Construction</option>
                                                                        <option value="Carburant & Gaz">Carburant & Gaz
                                                                        </option>
                                                                        <option value="Vehicules">Vehicules</option>
                                                                        <option value="Produits Agricoles ">Produits
                                                                            Agricoles </option>
                                                                        <option value="Boissons">Boissons</option>
                                                                        <option value="Produits Chimiques">Produits
                                                                            Chimiques</option>
                                                                        <option value="Meubles">Meubles</option>
                                                                        <option value="Materiaux Lourds">Materiaux
                                                                            Lourds</option>
                                                                        <option value="Produits Medicaux">Produits
                                                                            Medicaux</option>
                                                                        <option value="Materiels industriel">Materiels
                                                                            industriel</option>
                                                                        <option value="Agregats">Agregats</option>
                                                                        <option value="Grumes & Bois">Grumes & Bois
                                                                        </option>
                                                                        <option value="Divers marchandises">Divers
                                                                            marchandises</option>
                                                                        <option value="Autres">Autres</option>
                                                                    </optgroup>


                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                                d'emballage </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <select class="form-control" id="" name="emballage"
                                                                    required>
                                                                    <option value="" disabled selected>Type d'emballage
                                                                    </option>
                                                                    <option value="Cartons">Cartons</option>
                                                                    <option value="En vrac">En vrac</option>
                                                                    <option value="Palettes">Palettes</option>
                                                                    <option value="Sacs">Sacs</option>
                                                                    <option value="Ballots">Ballots</option>
                                                                    <option value="Bidons">Bidons</option>
                                                                    <option value="Caisses">Caisses</option>
                                                                    <option value="Sceaux">Sceaux</option>
                                                                    <option value="Citerne">Citerne</option>
                                                                    <option value="Bonbonnes">Bonbonnes</option>
                                                                    <option value="Futs">Futs</option>
                                                                    <option value="Conteneur 20’">Conteneur 20’</option>
                                                                    <option value="Conteneur 40’">Conteneur 40’</option>
                                                                    <option value="Colis">Colis</option>
                                                                    <option value="Bouteilles">Bouteilles</option>
                                                                    <option value="Autres">Autres</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Nombre de Colis</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <input type="number" name="nb_colis" class="col-xs-12">
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Type
                                                                de vehicule </div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <select class="form-control" name="type_vehicule"
                                                                    size="1" id="vehicule"
                                                                    onChange="changecat(this.value);">
                                                                    <option value="" disabled selected>Vehicule</option>
                                                                    <option value="Fourgon"> Camion Fourgon</option>
                                                                    <option value="plateau">Camion plateau</option>
                                                                    <option value="Benne">Camion Benne</option>
                                                                    <option value="carrosserie">Camion en carrosserie
                                                                    </option>
                                                                    <option value="frigorifique">Camion frigorifique
                                                                    </option>
                                                                    <option value="citerne">Camion-citerne</option>
                                                                    <option value="portechar">Camion porte char</option>
                                                                    <option value="portechar">Camion betaillére</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
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
                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Nombre de véhicules</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="col-sm-5 col-xs-12 no-padding">
                                                                <input type="number" name="nb_vehicules" class="col-xs-12" value="1">
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

                                                        <div class="row">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                                Details de Marchandise</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title">
                                                                <font color="red">*</font>
                                                            </div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <textarea
                                                                    placeholder="Plus de details sur votre marchandise"
                                                                    name="details_march" required></textarea>
                                                                <div class="conseil">Conseil : Donnez le maximum
                                                                    d’information pour eviter les surprises</div>
                                                            </div>
                                                        </div>

                                                        <div class="row margt">
                                                            <div class="col-sm-3 col-xs-12  no-padding left-title">Image
                                                                Marchandise</div>
                                                            <div class="col-sm-1 hidden-xs no-padding left-title"></div>
                                                            <div class="add-img col-sm-7 col-xs-12 no-padding previmg">
                                                                <input id="file" type="file" class="input-file"
                                                                    name="img_march" onchange="readURL(this);">
                                                                <label for="file" class="label-file"><span
                                                                        class="plus">+</span></label>
                                                                <div class="imgs-prev">
                                                                    <img id="blah" src="./img/contact-back.png" />
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
                                                                    placeholder="Pays *" required
                                                                    onchange="changePays(4)" onload="test();">
                                                                    <option selected value="Cameroun"
                                                                        style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                                        Cameroun</option>
                                                                    <option value="Congo"
                                                                        style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                                                        Congo</option>
                                                                    <option value="Gabon"
                                                                        style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                                        Gabon</option>
                                                                    <option value="Tchad"
                                                                        style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                                        Tchad</option>
                                                                    <option value="Republique centrafricaine"
                                                                        style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                        Republique centrafricaine</option>
                                                                    <option value="Guinee equatoriale"
                                                                        style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                        Guinee equatoriale</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Ville
                                                                de Chargement </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <input type="text" name="ville_charg" id="autocomplete"
                                                                    placeholder="Ville de Chargement" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Date
                                                                de Chargement </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <input type="date" name="date_charg" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                                Adresse de chargement </div>
                                                            <div class="col-sm-8 col-xs-12 no-padding form">
                                                                <textarea placeholder="Adresse exacte de chargement "
                                                                    name="adresse_charg" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-5 col-xs-12 no-padding left-title">
                                                                Tolérance au retard de chargement </div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" class="onoffswitch-checkbox"
                                                                        name="toler_charge" id="myonoffswitch"
                                                                        onclick="activate3()">
                                                                    <label class="onoffswitch-label"
                                                                        for="myonoffswitch">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row" id="nbjr2" style="display:none">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Nombre
                                                                de jours </div>
                                                            <div class="col-sm-3 col-xs-12 no-padding">
                                                                <input type="number" name="jr_retard2">
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
                                                                    <option selected value="Cameroun"
                                                                        style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
                                                                        Cameroun</option>
                                                                    <option value="Congo"
                                                                        style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
                                                                        Congo</option>
                                                                    <option value="Gabon"
                                                                        style="background:url('./img/flags/gabon.svg') no-repeat; width:30px; height:30px;">
                                                                        Gabon</option>
                                                                    <option value="Tchad"
                                                                        style="background:url('./img/flags/chad.svg') no-repeat; width:30px; height:30px;">
                                                                        Tchad</option>
                                                                    <option value="Republique centrafricaine"
                                                                        style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                        Republique centrafricaine</option>
                                                                    <option value="Guinee equatoriale"
                                                                        style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                        Guinee equatoriale</option>
                                                                </select>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Ville
                                                                de Livraison </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag5" name="ville_liv" placeholder="Ville de Livraison" required> -->
                                                                <input type="text" name="ville_liv"
                                                                    id="autocomplete-dynamic"
                                                                    style="width: 100%; border-width: 5px;"
                                                                    placeholder="ville de livraison" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Au
                                                                plus tard </div>
                                                            <div class="col-sm-6 col-xs-12 no-padding">
                                                                <input type="date" name="date_liv" required>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                                Adresse de Livraison </div>
                                                            <div class="col-sm-8 col-xs-12 no-padding form">
                                                                <textarea placeholder="Adresse exacte de livraison"
                                                                    name="adresse_liv" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-5 col-xs-12 no-padding left-title">
                                                                Tolérance au retard de livraison </div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <div class="onoffswitch ">
                                                                    <input type="checkbox" name="tol_liv"
                                                                        class="onoffswitch-checkbox"
                                                                        id="myonoffswitch10" onclick="activate2()">
                                                                    <label class="onoffswitch-label"
                                                                        for="myonoffswitch10">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row" id="nbjr" style="display:none">
                                                            <div class="col-sm-4 col-xs-12 no-padding left-title">Nombre
                                                                de jours </div>
                                                            <div class="col-sm-3 col-xs-12 no-padding">
                                                                <input type="number" name="jr_retard">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-md-12 col-xs-12 formulaire">
                                                    <h3 class="txt-bordure sections-title">Facultatif</h3>
                                                    <div class="form-group">
                                                        <div class="row margt">
                                                            <div class="col-sm-2 col-xs-12 no-padding left-title">
                                                                Proposer un Prix </div>
                                                            <div class="col-sm-1 col-xs-12 no-padding form">
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" class="onoffswitch-checkbox"
                                                                        name="prop_prix" id="myonoffswitch88"
                                                                        onclick="activate()">
                                                                    <label class="onoffswitch-label"
                                                                        for="myonoffswitch88">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12" id="prixprop"
                                                                style="display:none">
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number" placeholder="Prix"
                                                                        name="prix_prop" class="col-xs-12">
                                                                </div>
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <select name="devise" class="form-control">
                                                                        <option value="FCFA">FCFA</option>
                                                                        <option value="EURO">EURO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>




                                                        <div class="row margt">
                                                            <div class="col-sm-2 col-xs-12 no-padding left-title">Valeur
                                                                de la marchandise </div>
                                                            <div class="col-sm-1 col-xs-12 no-padding form">
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" class="onoffswitch-checkbox"
                                                                        name="mvaleur" id="myonoffswitch22"
                                                                        onclick="activate4()">
                                                                    <label class="onoffswitch-label"
                                                                        for="myonoffswitch22">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-12" id="valeurm"
                                                                style="display:none">
                                                                <div class="col-sm-4 col-xs-12 no-padding">
                                                                    <input type="number"
                                                                        placeholder="Valeur de la marchandise"
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




                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-xs-12 formulaire">
                                                    <h3 class="txt-bordure sections-title">Personne à contacter</h3>
                                                    <div class="form-group">
                                                        <div class="row margt">
                                                            <div class="col-sm-3 col-xs-12 no-padding left-title">Moi
                                                                même</div>
                                                            <div class="col-sm-7 col-xs-12 no-padding form">
                                                                <div class="onoffswitch">
                                                                    <input type="checkbox" checked="checked"
                                                                        class="onoffswitch-checkbox"
                                                                        name="contactPersonX" id="contactPersonX"
                                                                        onclick="contactPerson()">
                                                                    <label class="onoffswitch-label"
                                                                        for="contactPersonX">
                                                                        <span class="onoffswitch-inner"></span>
                                                                        <span class="onoffswitch-switch"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="meNot" style="display:none">
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
                                                                        name="contact_phone" class="col-xs-12">
                                                                </div>
                                                            </div>
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