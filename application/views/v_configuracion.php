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
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
    <style type="text/css">
        body{
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
                <div class="header-right">
                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect admin-logout m-r-25" onclick="cerrarCesion()">Cerrar Sesi&oacute;n</a>
                    <div class="background3"></div>
                    <div class="background2"></div>
                    <div class="background1"></div>
                </div>
            </div>
            <div class="contenido-admin">
                <h2>Configuracion del partner</h2>
                <p>(*) El logo tiene que tener un tamaño de 100px x 32px</p>
                <div class="mdl-admin">
                    <div class="col-xs-12 p-0">
                        <div class="col-xs-6">
                            <p>Selecciona Logo Partner</p>
                        </div>
                        <div class="col-xs-6">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-select" onclick="subirFactura();agregarDatos();" id="btnSubirFact">Seleccionar Archivo</button>
                        </div>
                    </div>
                    <div class="col-xs-12 p-0">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="eslogan">Escribe su Eslogan</label>
                                <input type="email" class="form-control" id="eslogan" maxlength="100" placeholder="Max. 100 carácteres">
                                <span class="mdl-textfield__limit" for="eslogan" data-limit="100"></span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-t-25" onclick="subirEslogan()">Subir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form id="frmArchivo" method="post" style="display: none;">
        <input id="archivo" type="file" name="archivo" />
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
        <input class="boton" type="submit" name="enviar" value="Importar" style="display: none" />
    </form>
    <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-ui.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-migrate-1.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
</body>
</html>