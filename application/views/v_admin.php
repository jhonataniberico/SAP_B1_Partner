<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="Proyecto de desarrollo de un producto wizard online que tenga un quiz y con una unica solucion que es SAP Business One">
    <meta name="keywords"               content="SAP,producto wizard">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="January 25, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	  <title>SAP Business One</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.png">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/autofill/2.2.2/css/autoFill.dataTables.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
    <style type="text/css">
        body{
            overflow-y: scroll;
            background-color: #EDEDED;
        }
    </style>
<body>
    <section id="principal">
        <div id="content" class="mdl-container">
            <div class="header" style="opacity: 1;">
                <div class="header-left">
                    <img class="logo-header" src="<?php echo RUTA_IMG?>logo/logo_header.png">
                </div>
                <div class="header-right admin">
                    <?php if($idioma == 'Francés'){ ?>
                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect admin-logout m-r-25" onclick="cerrarCesion()">Se déconnecter</a>
                    <?php } else { ?>
                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect admin-logout m-r-25" onclick="cerrarCesion()">Logout</a>
                    <?php } ?>
                    <div class="background3"></div>
                    <div class="background2"></div>
                    <div class="background1"></div>
                </div>
            </div>
            <div class="mdl-card mdl-card-table contenido-admin">
                <div class="table-responsive">
                    <table id="example" class="display nowrap table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <?php if($idioma == 'Francés'){ ?>
                            <tr class="tr-header-reporte">
                                <th class="text-center">Client</th>
                                <th class="text-center">Société</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Téléphone</th>
                                <th class="text-center">Relation avec SAP</th>
                                <th class="text-center">Position</th>
                                <th class="text-center">Je veux être contacté</th>
                                <th class="text-center">Pays</th>
                                <th class="text-center">Date</th>
                                <th class="text-center" style="display: none">Industrie</th>
                                <th class="text-center" style="display: none">Taille</th>
                                <th class="text-center" style="display: none">Facture annuelle</th>
                                <th class="text-center" style="display: none">Priorité</th>
                                <th class="text-center" style="display: none">Infrastructure</th>
                            </tr>
                            <?php } else { ?>
                            <tr class="tr-header-reporte">
                                <th class="text-center">Client</th>
                                <th class="text-center">Company</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Relationship</th>
                                <th class="text-center">Position</th>
                                <th class="text-center">Contacted</th>
                                <th class="text-center">Country</th>
                                <th class="text-center">Date</th>
                                <th class="text-center" style="display: none">Industry</th>
                                <th class="text-center" style="display: none">Size</th>
                                <th class="text-center" style="display: none">Annual invoice</th>
                                <th class="text-center" style="display: none">Priority</th>
                                <th class="text-center" style="display: none">Infrastructure</th>
                            </tr>
                            <?php } ?>
                        </thead>
                      <tbody>
                          <?php echo $html ?>  
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js"></script> 
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>
    <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        <?php if($idioma == 'Francés'){ ?>
            $('#example').DataTable( {
              responsive: true,
              dom: 'Bfrtip',
              language:{
                "emptyTable":     "Aucune donnée disponible",
                "info" : "Afficher _START_ a _END_ des _TOTAL_ résultats",
                "infoEmpty":      "Afficher 0 to 0 of 0 résultats",
                "search": "Chercher:",
                "lengthMenu":   "Afficher _MENU_ lignes",
                "paginate": {
                    "first":    "Primero",
                    "last":     "Ultimo",
                    "next":     "Suivant",
                    "previous": "Précédent"
                },
            },
            lengthMenu: [
                    //text: 'My button',
                    [ 10, 25, 50, -1 ],
                    [ '10 lignes', '25 lignes', '50 lignes', 'Tout voir' ]
                  ],
                  buttons: [
                      {
                        text: 'Afficher 10 lignes',
                        extend: 'pageLength'
                      },
                      {
                        extend:'excel'
                      },
                      {
                        extend:'print'
                      }
                  ]
            });
        <?php } else { ?>
            $('#example').DataTable( {
              responsive: true,
              dom: 'Bfrtip',
              lengthMenu: [
                            //text: 'My button',
                            [ 10, 25, 50, -1 ],
                            [ '10 lines', '25 lines', '50 lines', 'See everything' ]
                          ],
                          buttons: [
                              {
                                text: 'Show 10 lines',
                                extend: 'pageLength'
                              },
                              {
                                extend:'excel'
                              },
                              {
                                extend:'print'
                              }
                          ]
            });
        <?php } ?>
          $('.buttons-excel').empty();
          $('.buttons-print').empty();
          $('.buttons-excel').append('<i class="fa fa-download"></i>');
          $('.buttons-print').append('<i class="fa fa-print"></i>');
      });
    </script>
</body>
</html>