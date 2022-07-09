<?php include("header.php") ?>

<section class="page-title-section consultation">
</section>
<section class="contact-info-section">
    <div class="container ">

        <div class="row content-row">

            <div class="col-md-4">
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

                                <div class="col-md-12 ">Nom du client : <?php echo $res['client']; ?></div>
                                <div class="col-md-12 ">Télephone du client : <?php echo $res['telephoneclient']; ?></div>


                            </div>
                        <br>
                        <br>
                        <div class="form-group">
                                <b style="    font-size: 20px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #19b835;
    width: 100% !important;">Détail de l’offre </b>

                            </div>

                        
                    <div class="col-md-12">Marchandise : <?php echo $res['marchandise']; ?></div>
                    <?php $empQuery = "SELECT chv.id, ab.id_abonnement,ab.matricule,ab.img_vehicule,ab.type_vehicule,ab.marque,
ab.poid_max,ab.nom_chauffeur,ab.telephone_chauffeur
,tr.nom,tr.prenom,tr.telephone,tr.email,tr.r_s FROM abonnements as ab, chargement ch, chargement_vehicules chv, transporteur tr  
WHERE 1 and ab.id_abonnement=chv.id_abonnement AND
ch.id_charg=chv.id_chargement and 
tr.telephone=ab.telephone AND ch.id_charg=".$id_charg."";
$empRecords = mysqli_query($db, $empQuery);
$data = array();
$num=mysqli_num_rows($empRecords);
?>
                    <div class="col-md-12">Nombre de véhicules : <?php echo $num ; ?></div>
          
                   
                    <div class="col-md-12">Liste des véhicules :</div>

              
                    <?php
//echo $empQuery;
while ($row = mysqli_fetch_assoc($empRecords)) {

    $id_abonnement= $row['id_abonnement'];
    $selectSQL="SELECT * FROM status_gps WHERE id_chargement='$id_charg' and Id_abonnement='$id_abonnement' and Etat=0 ";

    $resultat = mysqli_query($db,$selectSQL);
    $s=mysqli_num_rows($resultat);
    echo "<label >" . $row['matricule'] .",". $row['marque'].",". $row['type_vehicule']. "'</label><br>";

}11 ?>
                    <div class="col-md-12">Adresse Chargement :
                        <?php echo $res['adresse_charg'].' , '.$res['ville_charg'].' , '.$res['pays_charg']; ?></div>
                    <div class="col-md-12">Date Chargement : <?php echo $res['date_charg']; ?></div>
                
                    <div class="col-md-12">Adresse Livraison :
                        <?php echo $res['adresse_liv'].' , '.$res['ville_liv'].' , '.$res['pays_liv']; ?></div>
                   

                    <div class="col-md-12">
                        <a href="invoice2.php?id_charg=<?php echo $_GET['id_charg']; ?>">Ordre de voyage</a> <br>

                </div>

                </div>
            </div>

            <?php 
                                            if  (isset($_SESSION['login_user'])) { 
                                                                                        ?>



            <div class="col-md-8">
       
                 
                                         <h3 class="txt-bordure sections-title">Liste des véhicules sélectionnés</h3>
                    <div class="col-md-12"  style="overflow-x: auto;">
                        <div class="contact-map">
                        <div class="tab-pane fade in active">
                                    <div class="css-tab-content formulaires">
                                        
                                    </div>
									<div>


									
                                    <div class="container result-rech">


                                    <!-- Custom Filter -->

                                    <!-- Table -->
                                    <table id='empTable1' class='display dataTable'>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Marque</th>
                                                <th>Type de véhicule</th>
                                                <th>Matricule</th>
                                                <th>Poids max</th>
                                                <th>Chauffeur</th>
                                                <th>Propiétaire</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                    </table>

                                    <script>
                                $(document).ready(function() {
                                    var dataTable = $('#empTable1').DataTable({
                                        'processing': true,
                                        'serverSide': true,
                                        'serverMethod': 'post',
                                        //'searching': false, // Remove default Search Control
                                        'ajax': {
                                            'url': 'ajaxfilechv.php',
                                            'data': function(data) {
                                              
												data.now = <?php echo $_GET['id_charg']; ?>;


                                            }
                                        },
                                        'success': function(data) {
                                            console.log(data)
                                        },
                                        'error': function(data) {
                                            console.log(data)
                                        },
                                        "createdRow": function(row, data, dataIndex) {
                                            // console.log(data.date_arr, new Date(data.date_arr
                                            //     .split("/")[1] +
                                            //     "/" + data.date_arr.split("/")[0] +
                                            //     "/" + data.date_arr
                                            //     .split("/")[2]))

                                             if (data.suivi ) {

                                                $(row).addClass('testclassvalid');
                                                $(row).attr( 'id', 'tablelinesuivi'+data.id_abonnement );

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
                                                data: 'marque'
                                            },
                                            {
                                                data: 'type_vehicule'
                                            },
                                            {
                                                data: 'matricule'
                                            },
                                             {
                                                "mData": "poid_max",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return row.poid_max + "Tonnes " ;
                                                }
                                            },
                                            {
                                                "mData": "nom_chauffeur",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return row.nom_chauffeur + " / " + row
                                                        .telephone_chauffeur ;
                                                }
                                            }, {
                                                "mData": "nom",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return (data.suivi? data.suivi+" / ":"")+ row.nom + " " + row
                                                        .prenom + " / " + row
                                                        .telephone+ " / " + row
                                                        .email+ " / " + row
                                                        .r_s;
                                                }
                                            },
                                            {
                                                "mData": "telephone",
                                                "mRender": function(data, type, row) {
                                                    // console.log(row)
                                                    return `
                                                    <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-vehicule.php?id_abonnement=${row.id_abonnement}&amp;id_chargement=<?php echo $_GET['id_charg']; ?>"><img style="height:20px;width:20px;margin:5px" src="./img/supp.png" ></a>
                                                    <button type="button" class="btn btn-primary" id="btssuivi${row.id_abonnement}"
onclick="validsuivi(`+row.id_abonnement+`);"
>
 ${row.suivi?'Désactiver':'Activer'} 
</button>
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
                
            </div>
                            </br>

                            </br>

                            </br>
                            <?php

                        $rrr="SELECT * FROM status_gps WHERE id_chargement='$id_charg' ";

                        $r1 = mysqli_query($db,$rrr);
                        $data=null;
                        while ($r11 = mysqli_fetch_assoc($r1)) {
                            $data=$r11;
                        }
                      //    echo  json_encode($data)  ;
                      //    echo explode("-",  $data["Date_D"])[2]."/".explode("-",$data["Date_D"])[1]."/".explode("-",$data["Date_D"])[0]  ;
                  // echo "                    ". $res["date_charg"];
                   ?>
      <?php
                      
                    ?>


            <div class="contact-map">

<div class="form-group">                
<form id="postuler" action="post-status.php" method="POST">

<div class="row">
<input id="id_chargement" hidden name="id_chargement"
value="<?php echo  $id_charg; ?>" type="number">

<input id="to_telephone" hidden name="to_telephone"
value="<?php echo  $res['telephone']; ?>" >
<input id="mail" hidden name="mail"
value="<?php echo  $res['email']; ?>" >

<div class="col-md-12 padding-12">
<label>Date de début du suivit:</label>

<input id="Date_D" name="Date_D" type="date" value="<?php echo  $data==null? date("Y-m-d", strtotime(str_replace('/', '-', $res["date_charg"] ))) :date("Y-m-d", strtotime(str_replace('/', '-',explode("-",  $data["Date_D"])[2]."/".explode("-",$data["Date_D"])[1]."/".explode("-",$data["Date_D"])[0] )))  ; ?>" >
</div>
<div class="col-md-12 padding-12">
<label>Date de fin du suivit:</label>

<input id="Date_D" name="Date_F" type="date" value="<?php echo   $data==null? date("Y-m-d", strtotime(str_replace('/', '-', $res["date_charg"] ))) :date("Y-m-d", strtotime(str_replace('/', '-',explode("-",  $data["Date_F"])[2]."/".explode("-",$data["Date_F"])[1]."/".explode("-",$data["Date_F"])[0]  ))); ?>" >
</div>

</div>
</div>

<button type="submit" class="btn btn-primary pull-right">Enregistrer
</button>
</form>
</div>


        </div><?php }?>




        </div>
        <?php
		}
		else{
			echo " Il faut choisir un Chargement !";
		}
	?>
</section>

<?php include"footer.php" ?>