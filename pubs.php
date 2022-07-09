<?php include"header.php"?>

<section class="page-title-section trouvtrans">
	<div class="container hidden-xs slide-bord">
		<div class="demo-slides">
			<div class="animated lightSpeedIn slide-title">Statut des véhicules</div>
		</div>
	</div>
</section>
<?php 
	$selectSQL="SELECT * FROM pub";
	$resultat = mysqli_query($db,$selectSQL);
	$res=mysqli_fetch_array($resultat);
	$s=mysqli_num_rows($resultat); 
?>

<section class="contact-info-section">
	<div class="container ">

		<div class="row content-row">
			
			<div class="col-md-12">
				<div class="contact-map pub">
					      <!-- Table -->
						  <table id='empTable341' class='display dataTable'>
                                                        <thead>
                                                            <tr>
                                                            

                                                <th>Image</th>
                                                <th>Matricule</th>
                                                <th>Code suivi</th>
                                                <th>Activer/désactiver suivi</th>
                                                <th>Prolonger</th>

                                                <th>Action</th>
                                                            </tr>
                                                        </thead>

                                                    </table>

                                                <!-- Script -->
                                                <script>
                    $( document ).ready( function() {
                        var dataTable = $( '#empTable341' ).DataTable( {
                            'processing': true,
                            'serverSide': true,
                            'serverMethod': 'post',
                            //'searching': false, // Remove default Search Control
                            'ajax': {
                                'url': 'ajaxfile41.php',
                                'data': function( data ) {
                                    // Read values
                                    var gender = $( '#pays21' ).val();
                                    var name = $( '#pays31' ).val();
                                    var villed = $( '#villed1' ).val();
                                    var villef = $( '#villef1' ).val();
                                    // var dated = $( '#dated' ).val();
                                    // var datef = $( '#datef' ).val();

                                    // Append to data
                                    data.pays2 = gender;
                                    data.pays3 = name;
                                    data.villed = villed;
                                    data.villef = villef;

                                    // data.dated = dated;
                                    // data.datef = datef;

                                }
                            }
                            ,
                            'success': function( data ) {
                                console.log( data )
                            }
                            ,
                            'error': function( data ) {
                                console.log( data )
                            }
                            ,
                            'createdRow': function( row, data, dataIndex ) {
                                $( row ).addClass( 'tablelinedispo'+data.id_disp );
                                $( row ).attr( 'id', 'tablelinedispo'+data.id_disp );
                                console.log( data.date_arr, new Date( data
                                .date_arr
                                .split( '/' )[ 1 ] +
                                '/' + data.date_arr.split(
                                    '/' )[ 0 ] +
                                    '/' + data.date_arr
                                    .split( '/' )[ 2 ] ) )

                                    if ( data.date_arr && ( new Date( data
                                    .date_arr.split(
                                        '/' )[ 1 ] + '/' +
                                        data.date_arr.split( '/' )[
                                            0 ] + '/' + data
                                            .date_arr.split(
                                                '/' )[ 2 ] ) > new Date() ) ) {

                                                    $( row ).addClass( 'testclassvalid' );

                                                } else {
                                                    $( row ).addClass( 'testclass' );
                                                }

                                            }
                                            ,
                                            'columns': [
                                                {
                                                    'mData': 'img_vehicule',
                                                    'mRender': function( data, type,
                                                    row ) {
                                                        return `<div

                                class = 'res-flx-s img-avatar-sm' >
                                    <img src="./img/uploaded/${data ? data : 'logo.png'}">
                                    </div>
                                `
                                                    }
                                                    ,

                                                }
                                                , 
 {
                                                    data: 'matricule'
                                                }
                                                , 
 {
                                                    data: 'id_chargement'
                                                }
                                              
                                                , 
                                                {
                                                "mData": "nom",
                                                "mRender": function(data, type, row) {
                                                    return `
                                                 <button type="button" class="btn btn-primary" id="btssuivi${row.id_abonnement}"
onclick="validsuivistatus(`+row.id_abonnement+`,`+row.id_chargement+`);"
>
 ${row.suivi=="0"?'Désactiver':'Activer'}
</button>
`;
                                                }
                                            },
                                            {
                                            "mData": "suivi",
                                            "mRender": function(data, type, row) {
                                                console.log("exampleModalLabelexampleModalLabelexampleModalLabelexampleModalLabel",row.id_chargement)
                                               
                                                var result=`<div 

class="res-flx-s img-avatar-sm">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal${row.Id_status}"
onclick="Changetest(`+row.Id_status+`);"
>
  Consulter
</button>

<div class="modal fade"  style="z-index: 99999;"
id="exampleModal${row.Id_status}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<form id="postulerstatus${row.Id_status} action="post-status1.php" method="POST">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Détails des véhicules proposés</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-x: auto;">

      <label id="postulerError${row.Id_status}" hidden style="backg"></label>
   
   
  


`;
                                            

                                                return result+= `
                                              
                                      
<div class="form-group" style="
    width: 100%!important;>                

<div class="form-group" style="
    width: 100%!important;">
    <div id="error${row.Id_status}">
    <input
value="${row.id_chargement}" id="${'id_chargement' +row.Id_status}" type="number">

</div>

<input id="Id_status${row.Id_status}" hidden name="Id_status"
value="${row.Id_status}" type="number">

<div class="col-md-12 padding-12">
<label>Date de début du suivit:</label>

<input id="Date_D${row.Id_status}" name="Date_D" type="date" value="${row.Date_D}" >
</div>
<div class="col-md-12 padding-12">
<label>Date de fin du suivit:</label>

<input id="Date_F${row.Id_status}" name="Date_F" type="date" value="${row.Date_F}" >
</div>

</div>
</div>
<div class="modal-footer">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal" >Fermer</button>
        <button onclick="submitCheckstatus(`+row.Id_status+`);"  type="button" class="btn btn-secondary"  >Enregistrer</button>


        </form>

   

      </div>

</div>

                                                </div>
    
    </div>
  </div>

</div> 

</div>`;
                                        }
                                    },
 {
                                                    'mData': 'telephone',
                                                    'mRender': function( data, type,
                                                    row ) {
                                                        // console.log( row )
                                                        return `
                                                        <a onclick="return confirm('Êtes-vous sûr de votre choix ?')" class="supp" href="supp-vehicule.php?id_abonnement=${row.id_abonnement}&amp;id_chargement=${row.id_chargement}"><img style="height:20px;width:20px;margin:5px" src="./img/supp.png" ></a>
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
                                        }
                                    );
                                    dataTable.buttons().container()
                                    .appendTo( '#example_wrapper .col-sm-6:eq(0)' );

                                    $( '#villed1' ).change( function() {
                                        dataTable.draw();
                                    }
                                );
                                $( '#villef1' ).change( function() {
                                    dataTable.draw();
                                }
                            );
                            $( '#dated1' ).change( function() {

                                dataTable.draw();
                            }
                        );
                        $( '#datef1' ).change( function() {
                            dataTable.draw();
                        }
                    );
                    $( '#pays31' ).change( function() {
                        dataTable.draw();
                    }
                );

                $( '#pays21' ).change( function() {
                    dataTable.draw();
                }
            );

        }
    );
                                                </script>

				</div>
			</div>
		</div>
	</div>
</section>		
			


<?php include"footer.php"?>