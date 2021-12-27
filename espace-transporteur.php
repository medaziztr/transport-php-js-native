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
                            <a href="#pub-ann" aria-controls="pub-ann" role="tab" data-toggle="tab"> Cherchez Un
                                Chargement</a>
                        </li>

                        <li role="choix">
                            <a href="#choix" aria-controls="choix" role="tab" data-toggle="tab">Annoncer votre
                                camion</a>
                        </li>


                        <li role="soumissions">
                            <a href="#soumissions" aria-controls="soumissions" role="tab" data-toggle="tab">Mes
                                soumissions</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="pub-ann">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">





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
                                                                    <option value="Cameroun" selected
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
                                                                    <option value="off"> Pays départ </option>
                                                                </select>

                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                <input type="text" name="ville_dep" id="villed"
                                                                    placeholder="Ville de Chargement">
                                                                <input type="text" name="ville_dep" id="villed-x"
                                                                    disabled="disabled"
                                                                    style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;" />
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                <input type="date" name="ville_dep" id="dated"
                                                                    placeholder="dated">
                                                            </div>
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
                                                                    <option value="Cameroun" selected
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
                                                                    <option value="off"> Pays d'arrivé </option>
                                                                </select>

                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag3" name="ville_arr" placeholder="Ville de départ"> -->
                                                                <input type="text" name="ville_arr" id="villef"
                                                                    style="width: 100%; border-width: 5px;"
                                                                    placeholder="Ville de livraison" />
                                                                <div id="suggestions-container"
                                                                    style="position: relative;"></div>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12 no-padding">
                                                                <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                                <input type="date" name="datef" id="datef"
                                                                    placeholder="datef">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            </form>
                                        </div>

                                        <!-- Table -->
                                        <table id='empTable' class='display dataTable'>
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Marchandise</th>
                                                    <th>Poids</th>
                                                    <th>Prix proposé</th>
                                                    <th>Départ</th>
                                                    <th>Arrivée</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>

                                    <script>
                                    $(document).ready(function() {
                                        var dataTable = $('#empTable').DataTable({
                                            'processing': true,
                                            'serverSide': true,
                                            'serverMethod': 'post',
                                            //'searching': false, // Remove default Search Control
                                            'ajax': {
                                                'url': 'ajaxfile2.php',
                                                'data': function(data) {
                                                    // Read values
                                                    var gender = $('#pays2').val();
                                                    var name = $('#pays3').val();
                                                    var villed = $('#villed').val();
                                                    var villef = $('#villef').val();
                                                    var dated = $('#dated').val();
                                                    var datef = $('#datef').val();
                                                    // Append to data
                                                    data.pays2 = gender;
                                                    data.pays3 = name;
                                                    data.villed = villed;
                                                    data.villef = villef;
                                                    data.dated = dated;
                                                    data.datef = datef;

                                                }
                                            },
                                            'success': function(data) {
                                                console.log(data)
                                            },
                                            'error': function(data) {
                                                console.log(data)
                                            },
                                            "createdRow": function(row, data, dataIndex) {
                                                console.log(data.date_liv, new Date(data.date_liv
                                                    .split("/")[1] + "/" + data.date_liv
                                                    .split("/")[0] + "/" + data.date_liv
                                                    .split("/")[2]))

                                                if (data.date_liv && (new Date(data.date_liv.split(
                                                        "/")[1] + "/" + data.date_liv.split(
                                                        "/")[0] + "/" + data.date_liv.split(
                                                        "/")[2]) > new Date())) {

                                                    $(row).addClass('testclassvalid');

                                                } else {
                                                    $(row).addClass('testclass');
                                                }


                                            },
                                            'columns': [

                                                {
                                                    "mData": "img_march",
                                                    "mRender": function(data, type, row) {
                                                        return `<div 
                            
                            class="res-flx-s img-avatar-sm">
                                            <img src="./img/uploaded/${data ? data : 'logo.png'}">
                                        `
                                                    },

                                                },
                                                {
                                                    data: 'marchandise'
                                                },
                                                {
                                                    data: 'poid'
                                                },
                                                {
                                                    data: 'prix_prop'
                                                },
                                                {
                                                    "mData": "ville_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.ville_charg + ", " + row
                                                            .pays_charg + ", " + row.date_charg;
                                                    }
                                                }, {
                                                    "mData": "pays_charg",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return row.ville_liv + ", " + row
                                                            .pays_liv + ", " + row.date_liv;
                                                    }
                                                }, {
                                                    "mData": "telephone",
                                                    "mRender": function(data, type, row) {
                                                        // console.log(row)
                                                        return `
                            <div class="res-flx petit hidden-xs">
                   <input type="submit" value="Consulter" onclick="location.href='chargement.php?id_charg=${row.id_charg}' "
                                                             <?php 
                                                                if(!isset($_SESSION['login_user'])) {
                                                                    echo "disabled" ;  
                                                                } else {
                                                                    if ($_SESSION['type']!="transporteur"){ echo "disabled" ;} }  
                                                               ?>      
                                                                   
                                                               >
                                                               </div>
                                                        
                                                        <div class="res-flx hidden-lg hidden-md hidden-sm">
                                                            <input type="submit" value="Consulter" onclick="location.href='chargement.php?id_charg=${row.id_charg}' "
                                                             <?php 
                                                                if(!isset($_SESSION['login_user'])) { 
                                                                    echo "disabled" ;  
                                                                } else {
                                                                    if ($_SESSION['type']!="transporteur"){ echo "disabled" ;} }  
                                                               ?>      
                                                                   
                                                               >
                                                        </div>


                    `;
                                                    }
                                                },
                                                // { data: 'date_charg' },
                                                // { data: 'ville_liv' },
                                                // { data: 'pays_liv' },
                                                // { data: 'date_liv' },
                                                // { data: 'id_charg' }
                                            ],
                                            dom: 'Bfrtip',
                                            buttons: [
                                                'copyHtml5',
                                                'excelHtml5',
                                                'csvHtml5',
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















 <div role="tabpanel" class="tab-pane fade in" id="soumissions">
                            <div class="css-tab-content">
                                <div class="tab-pane fade in active">



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
                                                            <option value="Cameroun" selected
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
                                                            <option value="off"> Pays départ </option>
                                                        </select>

                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                        <input type="text" name="ville_dep" id="villed"
                                                            placeholder="Ville de Chargement">
                                                        <input type="text" name="ville_dep" id="villed-x"
                                                            disabled="disabled"
                                                            style="color: #CCC; position: absolute; background: transparent; z-index: 1;height:0px;" />
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                        <input type="date" name="ville_dep" id="dated"
                                                            placeholder="dated">
                                                    </div>
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
                                                            <option value="Cameroun" selected
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
                                                            <option value="off"> Pays d'arrivé </option>
                                                        </select>

                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag3" name="ville_arr" placeholder="Ville de départ"> -->
                                                        <input type="text" name="ville_arr" id="villef"
                                                            style="width: 100%; border-width: 5px;"
                                                            placeholder="Ville de livraison" />
                                                        <div id="suggestions-container" style="position: relative;">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12 no-padding">
                                                        <!-- <input type="text" class="form-control"  id="tag2" name="ville_dep" placeholder="Ville de départ"> -->
                                                        <input type="date" name="datef" id="datef" placeholder="datef">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    </form>
                                </div>

                                <!-- Table -->
                                <table id='empTable2' class='display dataTable'>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Marchandise</th>
                                            <th>Poids</th>
                                            <th>Cout</th>
                                            <th>Départ</th>
                                            <th>Arrivée</th>
                                            <th>Véhicules</th>
                                            <th>Proposition</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <script>
                            $(document).ready(function() {
                                var dataTable2 = $('#empTable2').DataTable({
                                    'processing': true,
                                    'serverSide': true,
                                    'serverMethod': 'post',
                                    //'searching': false, // Remove default Search Control
                                    'ajax': {
                                        'url': 'ajaxfile_proposition.php',
                                        'data': function(data) {
                                            // Read values
                                            var gender = $('#pays2').val();
                                            var name = $('#pays3').val();
                                            var villed = $('#villed').val();
                                            var villef = $('#villef').val();
                                            var dated = $('#dated').val();
                                            var datef = $('#datef').val();
                                            // Append to data
                                            data.pays2 = gender;
                                            data.pays3 = name;
                                            data.villed = villed;
                                            data.villef = villef;
                                            data.dated = dated;
                                            data.datef = datef;

                                        }
                                    },
                                    'success': function(data) {
                                        console.log(data)
                                    },
                                    'error': function(data) {
                                        console.log(data)
                                    },
                                    "createdRow": function(row, data, dataIndex) {
                                        console.log(data.date_liv, new Date(data.date_liv
                                            .split("/")[1] + "/" + data.date_liv
                                            .split("/")[0] + "/" + data.date_liv
                                            .split("/")[2]))

                                        if (data.date_liv && (new Date(data.date_liv.split(
                                                "/")[1] + "/" + data.date_liv.split(
                                                "/")[0] + "/" + data.date_liv.split(
                                                "/")[2]) > new Date())) {

                                            $(row).addClass('testclassvalid');

                                        } else {
                                            $(row).addClass('testclass');
                                        }


                                    },
                                    'columns': [

                                        {
                                            "mData": "img_march",
                                            "mRender": function(data, type, row) {
                                                return `<div 

class="res-flx-s img-avatar-sm">
        <img src="./img/uploaded/${data ? data : 'logo.png'}">
    `
                                            },

                                        },
                                        {
                                            data: 'marchandise'
                                        },
                                        {
                                            data: 'poid'
                                        },
                                        {
                                            data: 'prix_prop'
                                        },
                                        {
                                            "mData": "ville_charg",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.ville_charg + ", " + row
                                                    .pays_charg + ", " + row.date_charg;
                                            }
                                        }, {
                                            "mData": "pays_charg",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.ville_liv + ", " + row
                                                    .pays_liv + ", " + row.date_liv;
                                            }
                                        },
                                        {
                                            "mData": "vehicules",
                                            "mRender": function(data, type, row) {
                                                var val=[];
                                                val=row.vehicules;
                                                var result=`<div 

class="res-flx-s img-avatar-sm">`;
                                                for (let index = 0; index < val.length; index++) {
                                                     const element = val[index];
                                                     result+=`<label >${element.matricule}</label> </br>`
                                                    console.log()
                                                }

                                                return result+= ` </div>`;
                                        }
                                    },
                                        {
                                            "mData": "avance",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return "Montant: " + row
                                                    .montant + "Fcfa Avance " + row.avance +
                                                    "Fcfa";
                                            }
                                        },
                                        {
                                            "mData": "telephone",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return `
                                                <a href="modif-charg.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}"><img src="./img/modif.png"  style="height:20px;width:20px"></a>
                                        <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-charg.php?id_charg=${row.id_charg}&amp;telephone=${row.telephone}"><img style="height:20px;width:20px" src="./img/supp.png" ></a>
                      


`;
                                            }
                                        },
                                        // { data: 'date_charg' },
                                        // { data: 'ville_liv' },
                                        // { data: 'pays_liv' },
                                        // { data: 'date_liv' },
                                        // { data: 'id_charg' }
                                    ],
                                    dom: 'Bfrtip',
                                    buttons: [
                                        'copyHtml5',
                                        'excelHtml5',
                                        'csvHtml5',
                                        'pdfHtml5'
                                    ]
                                });
                                dataTable2.buttons().container()
                                    .appendTo('#example_wrapper .col-sm-6:eq(0)');

                                $('#villed').change(function() {
                                    dataTable2.draw();
                                });
                                $('#villef').change(function() {
                                    dataTable2.draw();
                                });
                                $('#dated').change(function() {

                                    dataTable2.draw();
                                });
                                $('#datef').change(function() {
                                    dataTable2.draw();
                                });
                                $('#pays3').change(function() {
                                    dataTable2.draw();
                                });

                                $('#pays2').change(function() {
                                    dataTable2.draw();
                                });
                            });
                            </script>



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
                                                    <div class="col-sm-3 col-xs-12 no-padding left-title">
                                                        Matricule </div>
                                                    <div class="col-sm-1 hidden-xs no-padding left-title">
                                                        <font color="red">*</font>
                                                    </div>
                                                    <div class="col-sm-5 col-xs-12 no-padding">
                                                        <select class="form-control" id="" name="id_ab" required>
                                                            <?php
                                                                            do{
                                                                                if($_SESSION['type']=='transporteur'){
                                                                        ?>
                                                            <option value="<?php echo $res['id_abonnement']; ?>">
                                                                <?php echo $res['matricule']; ?></option>
                                                            <?php
                                                                                }
                                                                            }
                                                                            while($res=mysqli_fetch_array($resultat));
                                                                        ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-12  no-padding left-title">Poids
                                                        Disponible (T) </div>
                                                    <div class="col-sm-1 hidden-xs no-padding left-title">
                                                        <font color="red">*</font>
                                                    </div>
                                                    <div class="col-sm-5 col-xs-12 no-padding">
                                                        <input step="0.1" min="0.1" type="number" required
                                                            class="col-xs-12" name="poid_disp">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                        <font color="red">* Champs obligatoires</font>
                                                    </div>
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

                                                <a href="#" id='logintest' data-toggle="modal" data-target="#login">Vous
                                                    n'êtes pas connecté</a>

                                                <?php
                                                                }
                                                                ?>
                                            </div>
                                        </div>



                                        <div class="col-md-6 col-xs-12 formulaire">
                                            <h3 class="txt-bordure sections-title">Chargement</h3>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Pays
                                                        de Départ </div>
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

                                                        <select type="text" name="pays_dep" id="pays8"
                                                            placeholder="Pays *" required onchange="changePays(8)">
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
                                                            <option value="République centrafricaine"
                                                                style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                République centrafricaine</option>
                                                            <option value="Guinée équatoriale"
                                                                style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                Guinée équatoriale</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Ville
                                                        de Départ </div>
                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                        <!-- style="height: 80px; width :200px;"-->
                                                        <!--<input type="text" name="ville_dep" id="autocomplete-ajax"  placeholder="Ville de départ">
            <input type="text" name="ville_dep" id="autocomplete-ajax-x" disabled="disabled" style="color: #CCC; position: absolute; background: transparent; z-index: 1;"/> -->
                                                        <input type="text" name="ville_dep" id="autocomplete" />
                                                    </div>

                                                    <!-- <div class="col-sm-6 col-xs-12 no-padding"> 
                                                                        <input required type='text' id="tag8" class="form-control" name="ville_dep" >
                                                                    </div> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Date
                                                        de Départ </div>
                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                        <input required type="date" name="date_dep">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                        Adresse de Départ </div>
                                                    <div class="col-sm-8 col-xs-12 no-padding form">
                                                        <textarea required placeholder="Votre Adresse de Départ"
                                                            name="adresse_dep"></textarea>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xs-12 formulaire">
                                            <h3 class="txt-bordure sections-title">Arrivée</h3>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Pays
                                                        d'arrivée </div>
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

                                                        <select type="text" name="pays_arr" id="pays9"
                                                            placeholder="Pays *" required onchange="changePays(9)">
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
                                                            <option value="République centrafricaine"
                                                                style="background:url('./img/flags/central-african-republic.svg') no-repeat; width:30px; height:30px;">
                                                                République centrafricaine</option>
                                                            <option value="Guinée équatoriale"
                                                                style="background:url('./img/flags/equatorial-guinea.svg') no-repeat; width:30px; height:30px;">
                                                                Guinée équatoriale</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Ville
                                                        d'arrivée </div>
                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                        <!-- style="height: 80px; width :200px;"-->
                                                        <input type="text" name="ville_arr" id="autocomplete-dynamic"
                                                            style="width: 100%; border-width: 5px;" />
                                                    </div>

                                                    <!-- <div class="col-sm-6 col-xs-12 no-padding"> 
                                                                        <input type='text' required class="form-control"  id="tag9" name="ville_arr" >   
                                                                        
                                                                    </div> -->
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">Au
                                                        plus tard </div>
                                                    <div class="col-sm-6 col-xs-12 no-padding">
                                                        <input required type="date" name="date_arr">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-12 no-padding left-title">
                                                        Destination </div>
                                                    <div class="col-sm-8 col-xs-12 no-padding form">
                                                        <textarea required placeholder="Votre adresse de destination"
                                                            name="adresse_arr"></textarea>
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
                                                                class="onoffswitch-checkbox" name="contactPersonX"
                                                                id="contactPersonX" onclick="contactPerson()">
                                                            <label class="onoffswitch-label" for="contactPersonX">
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
                                                            <font color="red">*</font>
                                                        </div>
                                                        <div class="col-sm-5 col-xs-12 no-padding">
                                                            <input type="text" id="contact_name" name="contact_name"
                                                                value="" class="col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3 col-xs-12  no-padding left-title">
                                                            Numéro de téléphone</div>
                                                        <div class="col-sm-1 hidden-xs no-padding left-title">
                                                            <font color="red">*</font>
                                                        </div>
                                                        <div class="col-sm-5 col-xs-12 no-padding">
                                                            <input type="number" pattern="[0-9]{15}" value=""
                                                                id="contact_phone" name="contact_phone"
                                                                class="col-xs-12">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-xs-12 formulaire">
                                            <div class="col-xs-1 form pull-right hidden-xs">
                                                <div class="res-flx petit ">
                                                    <input type="submit" value="Valider" <?php 
                                                                    if(!isset($_SESSION['login_user'])) { 
                                                                        echo "disabled" ;  
                                                                    } else {
                                                                        if (($_SESSION['type']!="transporteur") OR ( $s==0 ) ){ echo "disabled" ;} }  
                                                                   ?>>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 form hidden-lg hidden-sm hidden-md">
                                                <div class="res-flx petit ">
                                                    <input type="submit" value="Postuler" <?php 
                                                                    if(!isset($_SESSION['login_user'])) { 
                                                                        echo "disabled" ;  
                                                                    } else {
                                                                        if (($_SESSION['type']!="transporteur") OR ( $s==0 ) ){ echo "disabled" ;} }  
                                                                   ?>>
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