<?php include"header.php" ?>
<?php
    $telephone=$_SESSION['telephone'];
    $today =   strtotime(date('d-m-Y')) ;
	
	$sql = "SELECT * FROM `transporteur` WHERE `telephone`='$telephone'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);


?>


<section class="page-title-section trouvtrans">
    <div class="container hidden-xs slide-bord">
        <div class="demo-slides">
            <div class="animated lightSpeedIn slide-title">Notifications de <?php echo $row['prenom'].' '.$row['nom']; ?>
            </div>
            <p class="lead animated lightSpeedIn">Consultez l'historique des notifications de
                <?php echo $row['prenom'].' '.$row['nom']; ?></p>
        </div>
    </div>
</section>

<section class="contact-info-section">
    <div class=" ">
        <div class="row ">

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
                                                    <?php
        if ($_SESSION['type']=="transporteur"){
    ?>               <div class="col-sm-12 col-xs-12 no-padding">

<select type="text" name="notification_input" id="notification_input"
    placeholder="Pays *" required>
    <option value="all" selected
        style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
        Tout</option>
    <option value="Reception" 
        style="background:url('./img/flags/cameroon.svg') no-repeat; width:30px; height:30px;">
        Notification de réception</option>
    <option value="Soumission"
        style="background:url('./img/flags/congo.svg') no-repeat; width:30px; height:30px;">
        Notification de soumission</option>
   
</select>

</div>
<?php
        }
    ?>
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
                                            <th>Prestataire</th>
                                            <th>Auteur</th>
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
                                        'url': 'ajaxfile_notification.php',
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
                                            data.type="<?php echo $row['type'] ;  ?>";
                                            data.telephone="<?php echo $_SESSION['telephone'] ;  ?>";
                                            <?php
        if ($_SESSION['type']=="transporteur"){
    ?>           
                                                var notification_input = $('#notification_input').val();

                                            data.notification_input = notification_input;

<?php
        }
    ?>           
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
                                            "mData": "nom",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.nom + " " + row
                                                    .prenom ;
                                            }
                                        },
                                        {
                                            "mData": "nomSender",
                                            "mRender": function(data, type, row) {
                                                // console.log(row)
                                                return row.nomSender.nom + " " + row.nomSender.prenom " " + row.nomSender.email+ " " + row.nomSender.telephone ;
                                            }
                                        },
                                        {
                                            "mData": "vehicules",
                                            "mRender": function(data, type, row) {
                                                console.log("rowrowrowrowrowrowrowrowrowrowrow",data,type,row)
                                                var val=[];
                                                val=row.vehicules;
                                                var result=`<div 

class="res-flx-s img-avatar-sm">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal${row.id_notifications}">
  Consulter
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal${row.id_notifications}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form id="postuler" action="post-valide.php" method="POST" >

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Détails des véhicules proposés</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table id='empT' class='display dataTable'>
                                                        <thead>
                                                            <tr>
                                                            <th></th>
                                                                <th>Image</th>
                                                                <th>Matricule</th>
                                                                <th>Genre</th>

                                                                <th>Marque</th>
                                                                <th>Poids disponible</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
   
  
                                                        <input type="text"name="id_charg" hidden value="${row.id_charg}">


`;
                                                for (let index = 0; index < val.length; index++) {
                                                     const element = val[index];
                                                     result+=`
                                                     <tr>
                                                     <td>
                                                     <input type="text"name="id_postuler" hidden  value="${row.id_postuler}">
                                                     <input type="text"name="telephone" hidden value="${row.telephone}">

                                                     <input type="text"name="checkId[]" hidden value="${element.id_abonnement}">
                                                     
                                                     <input id="id${row.id_notifications+""+index}" type="hidden" name="check[]" ${element.checked?'value="1"':'value="0"'}>
 <input onchange="$('#id${row.id_notifications+""+index}').val(this.checked?1:0)" type="checkbox" id="dummy-id" 
 name="dummy-name" ${element.checked?'checked':''} 
 <?php if ($row['type']=="transporteur") {
            # code...
       ?>
       ${row.type=="Soumission" && row.chargement_telephone ==  <?php echo $_SESSION['telephone']; ?> ?'':'disabled'}
        <?php }
       ?>
 
  >
                                                     
                                                      </td>
                                                     <td><img src="./img/uploaded/${element.img_vehicule?element.img_vehicule : 'logo.png'}"> </td>
                                                     <td>${element.matricule} </td>
                                                     <td>${element.type_vehicule} </td>
                                                     <td>${element.marque} </td>
                                                     <td>${element.poid_max} </td>

    </tr>`
                                                    console.log()
                                                }

                                                return result+= `
                                                </form>
                                                </tbody>
                                                </table>
                                                </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <?php if ($row['type']=="transporteur") {
            # code...
       ?>
       ${row.type=="Soumission" && row.chargement_telephone ==  <?php echo $_SESSION['telephone']; ?> ?'        <button type="submit"  class="btn btn-primary ">Valider</button>':""}
        <?php }else if ($row['type']=="client") {
       ?>
            <button type="submit"  class="btn btn-primary ">Valider</button>

<?php }
       ?>
      </div>
    </div>
  </div>
  </form>
</div> </div>`;
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
                                               
                                        <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-notification.php?id_notification=${row.id_notifications}&amp;redirect=${'notifications.php'}"><img style="height:20px;width:20px" src="./img/supp.png" ></a>
                      


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

                                <?php
        if ($_SESSION['type']=="transporteur"){
    ?>           
                                           $('#notification_input').change(function() {
                                            dataTable2.draw();
                                                    });

<?php
        }
    ?> 
                            });
                            </script>



                        </div>
                    </div>
                </div>

                </div>
    </div>
</section>




















      
<?php include"footer.php" ?>


