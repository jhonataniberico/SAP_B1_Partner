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
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.ico">
	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
	<!-- <script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-114404560-1', 'auto');
			ga('send', 'pageview');
	</script> -->
</head>
<body>
	<section id="principal">
	    <div class="section">
    		<div id="home" class="window-center">
    			<div class="header-home">
					<img src="<?php echo RUTA_IMG?>logo/logo_home.png">
					<div class="mdl-idioma">
						<select class="selectpicker" id="IdiomaHome"  name="Idioma" onchange="cambiarIdiomaHome()">
							<option value="Español">Espa&ntilde;ol</option>
							<option value="Francés">Fran&ccedil;ais</option>
						</select>
    				</div>
		    	</div>
    			<div class="mdl-container mdl-all-window">
	    			<div class="first-eslogan">
    					<img class="logo-home" src="<?php echo RUTA_IMG?>logo/logo_partner.png">
	            		<h2 class="title-home">Escriba su eslogan aqu&iacute;</h2>
    				</div>
	    			<div class="second-eslogan">
	    				<img class="logo-home" src="<?php echo RUTA_IMG?>logo/logo_header.png">
	            		<h2 class="title-home">Diferentes escenarios, una soluci&oacute;n.</h2>
	    			</div>
	    		</div>
	    		<div class="background-body">
					<div class="background-body3"></div>
					<div class="background-body2"></div>
					<div class="background-body1"></div>
	    		</div>
	    		<div class="button-next-prev">
	    			<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-arrow button-next" onclick="buttonNext()">
						<div class="arrow arrow-right"></div>
					</button>
	    		</div>
	    		<div class="fondo-bottom fondo-partner continue"></div>
    		</div>
			<div class="mdl-container-question">
				<div class="header">
	    			<div class="header-left">
	    				<img class="logo-header" src="<?php echo RUTA_IMG?>logo/logo_header.png">
	    				<img class="logo-partner" src="<?php echo RUTA_IMG?>logo/google.png">
	    				<h2>¿Est&aacute; listo para SAP Business One&#63;</h2>
	    			</div>
	    			<div class="header-right">
    					<button class="mdl-button mdl-js-button mdl-button--icon button-home" onclick="returnHome()"><i class="mdi mdi-home"></i></button>
	    				<div class="mdl-idioma">
							<select class="selectpicker" id="Idioma"  name="Idioma" onchange="cambiarIdioma()">
								<option value="Español">Espa&ntilde;ol</option>
								<option value="Francés">Fran&ccedil;ais</option>
							</select>
	    				</div>
						<div class="background3"></div>
						<div class="background2"></div>
						<div class="background1"></div>
	    			</div>
	    		</div>
	    		<div class="logo-bottom">
        			<img src="<?php echo RUTA_IMG?>logo/logo_home.png">
		    		<div class="bottom-right">
						<p>Puede seleccionar m&aacute;s de una opci&oacute;n</p>
		    		</div>
        		</div>
        		<div class="chat">
        			<a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005114" target="_blank"><img src="<?php echo RUTA_IMG?>chat.png"><label>Chatea con nosotros</label></a>
        		</div>
				<div id="window1-page" class="window-center opacity-done">
					<div class="mdl-container text-center">
						<div class="question">
			        		<span class="number">01/05</span>
			        		<h2>¿En qu&eacute; industria se desempe&ntilde;a&#63;</h2>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-profesional.png">
			        				<p>Servicios Profesionales</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Servicios Profesionales')">Seleccione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Sab&iacute;a que...</h2>
			    						<p>... los prestadores de servicios profesionales exitosos aprovechan la tecnolog&iacute;a en nuevas formas para perfeccionar las pr&aacute;cticas de negocio, 
			    						mejorar la agilidad y atender mejor a los clientes.</p>
			    						<small>(IDC, septiembre 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			    				<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-retail.png">
			        				<p>Retail</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Retail')">Seleccione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Sab&iacute;a que...</h2>
			    						<p>... por cada innovador que sale a crear un nuevo mercado o tipo de producto, hay al menos un centenar de mercados
			    						 que se paralizan o se reducen.</p>
			    						<small>(IDC, septiembre 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-distribucion.png">
			        				<p>Distribuci&oacute;n</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Distribución')">Seleccione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Sab&iacute;a que...</h2>
			    						<p>... puede mejorar la experiencia general del cliente con la realizaci&oacute;n de pedidos multicanal y su r&aacute;pido
			    						 procesamiento.</p>
			    						<small>(SAP Performance Benchmarking)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			    			<div class="flip-card">
			    				<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-producto.png">
			        				<p>Productos de consumo</p>
			        			</div>
			    			</div>
			    			<div class="content-card">
			        			<button id="buttonCard4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Productos de consumo')">Seleccione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Sab&iacute;a que...</h2>
			    						<p>... las empresas exitosas del sector reinventan su forma de operar, aprovechando la tecnolog&iacute;a para perfeccionar las
			    						pr&aacute;cticas de negocio, mejorar la agilidad y atender mejor a clientes y distribuidores.</p>
			    						<small>(IDC, septiembre 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-proceso.png">
			        				<p>Procesos/Manufactura</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Procesos/Manufactura')">Seleccione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Sab&iacute;a que...</h2>
			    						<p>... se reduce el 19% en el costo de fabricaci&oacute;n con un monitorio en tiempo real de costo de producci&oacute;n y variantes.</p>
			    						<small>(IDC, septiembre 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
					</div>
				</div>
				<div id="window2-page" class="window-center opacity-done">
					<div class="mdl-container mdl-tablet text-center">
						<div class="question">
		            		<span class="number">02/05</span>
		            		<h2>¿De qu&eacute; tama&ntilde;o es su empresa&#63;</h2>
		            	</div>
		            	<div class="mdl-flex">
	            			<div class="mdl-card-question">
		            			<div class="flip-card">
		            				<div class="card-front card-front-none">
			            				<img src="<?php echo RUTA_IMG?>cards/card-empleados.png">
			            				<p>Número de empleados</p>
			            			</div>
		            			</div>
		            			<div class="content-card">
		            				<div class="select-empleados">
		            					<button id="buttonMenos" class="mdl-button mdl-js-button mdl-button--icon select-one" onclick="operar(this.id,1)"><i class="mdi mdi-remove"></i></button>
		            					<span id="textOperar">Seleccione</span>
		            					<button id="buttonMas" class="mdl-button mdl-js-button mdl-button--icon select-one" onclick="operar(this.id,2)"><i class="mdi mdi-add"></i></button>
		            				</div>
			            			<div class="contenido">
			            				<div class="contenido-left">
			            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
			            				</div>
			            				<div class="contenido-right">
		            						<h2>Sab&iacute;a que...</h2>
		            						<p>... las interacciones con los clientes y consumidores es el punto de partida para el crecimiento de los ingresos de las peque&ntilde;as y medianas
		            						 empresas de productos de consumo.</p>
		            						<small>(IDC, septiembre 2016)</small>
			            				</div>
			            			</div>
			            		</div>
			            	</div>
			            	<div class="mdl-card-question visi-hidden">
			            		<div class="flip-card">
			            			<div class="card-front card-front-none">
			            				<img src="<?php echo RUTA_IMG?>cards/card-facturacion.png">
			            				<p>Facturaci&oacute;n anual</p>
			            			</div>
			            		</div>
			            		<div class="content-card">
			            			<div class="row">
			            				<div class="col-xs-12">
			            					<div class="mdl-select">
			            						<select class="selectpicker" id="facturacion" name="facturacion" title="Seleccione" onchange="selectFacturacion(this.id)">
													<option value="< 1 Millón de Dólares">< 1 Millón de dólares</option>
													<option value="1 - 3 Millones de dólares">1 - 3 Millones de dólares</option>
													<option value="3 - 5 Millones de dólares">3 - 5 Millones de dólares</option>
													<option value="5 - 10 Millones de dólares">5 - 10 Millones de dólares</option>
													<option value="10 - 20 Millones de dólares">10 - 20 Millones de dólares</option>
													<option value="20 - 40 Millones de dólares">20 - 40 Millones de dólares</option>
													<option value="No poseo información">No poseo información</option>
												</select>
			            					</div>
				            			</div>
			            			</div>
			            			<div class="contenido">
			            				<div class="contenido-left">
			            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
			            				</div>
			            				<div class="contenido-right">
		            						<h2>Sab&iacute;a que...</h2>
		            						<p>... el aumento de las ventas por correo electr&oacute;nico, ahora es un poco m&aacute;s del 10% de las ventas totales.</p>
		            						<small>(IDC, septiembre 2016)</small>
			            				</div>
			            			</div>
			            		</div>
			            	</div>	
		            	</div>
					</div>
				</div>
				<div id="window3-page" class="window-center opacity-done">
					<div class="mdl-container text-center">
						<div class="question">
		            		<span class="number">03/05</span>
		            		<h2>¿Cu&aacute;l es la prioridad de su negocio&#63;</h2>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-cloud.png">
		            				<p>Cloud</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aprovechar la nube para concentrarse en crecer, y no en implementar y gestionar su TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonCloud" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Cloud')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... m&aacute;s del 90% de las empresas ya est&aacute;n utilizando tecnolog&iacute;a en la nube en un entorno p&uacute;blico, privado o h&iacute;brido.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-anywhere.png">
		            				<p>Movilidad</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Ofrecer a los empleados acceso al software a trav&eacute;s de una aplicaci&oacute;n m&oacute;vil intuitiva.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonAnywhere" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Movilidad')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... puedes acceder a an&aacute;lisis integrados para la toma de decisiones en tiempo real.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img class="m-b-0" src="<?php echo RUTA_IMG?>cards/card-sap.png">
		            				<p>An&aacute;lisis en tiempo real con SAP HANA</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Con el poder de <br>SAP HANA se puede disminuir en un 70% sus tiempos de an&aacute;lisis.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonSap" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Análisis en tiempo real con SAP HANA')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... Business One aprovecha una tecnolog&iacute;a In-Memory Computing para generar informes y an&aacute;lisis.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img class="m-b-0" src="<?php echo RUTA_IMG?>cards/card-analytics.png">
		            				<p>An&aacute;lisis predictivos con Analytics</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Anticipar resultados con anal&iacute;tica predictiva y darle el rumbo indicado a su negocio.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonAnalytics" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Análisis predictivos con Analytics')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... obtendr&aacute; la capacidad de explorar, aumentar y analizar de forma instant&aacute;nea todos los datos pr&aacute;cticamente en tiempo real.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-starup.png">
		            				<p>Emprendedores</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Contar con un aliado, para afrontar los desaf&iacute;os de la era digital y conquistar sus metas.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonStarup" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Emprendedores')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... el 35% de los peque&ntilde;os y medianos minoristas han invertido en tecnolog&iacute;a para hacer crecer los ingresos.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-subsidaries.png">
		            				<p>Agencias o subsidiarias</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label style="font-size: 16px;">Crear informes r&aacute;pidos y precisos sobre env&iacute;os entrantes y salientes, inventarios y ubicaciones de productos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonSubsidaries" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Agencias o subsidiarias')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... tiene una plataforma empresarial flexible que le permitir&aacute; descubrir todo el potencial de su ecosistema.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
				<div id="window4-page" class="window-center opacity-done">
					<div class="mdl-container text-center">
						<div class="question">
		            		<span class="number">04/05</span>
		            		<h2 class="unique">¿Que tipo de infraestructura est&aacute; buscando&#63;</h2>
		            	</div>
		            	<div class="mdl-card-question">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-local.png">
		            				<p>Local</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Implementar en su actual infraestructura o adquirir una de las opciones de hardware certificado.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonLocal" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Local')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... se puede hacer la conexi&oacute;n de estas aplicaciones (comercio electr&oacute;nico, punto de venta, Marketplace, CRM, etc.) con
	            						 SAP Business One f&aacute;cilmente cuando se emplea On-Premise.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido4.png">
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-cloud.png">
		            				<p>Cloud</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Ejecutar el software desde la nube junto con su informaci&oacute;n empresarial.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonCloudI" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Cloud')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... el 21% est&aacute; cada vez m&aacute;s interesado en alternativas o alojadas a lo que ahora ejecutan On-Premise.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido4.png">
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-hibrida.png">
		            				<p>H&iacute;brida</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Combinar ambas infraestructuras donde la informaci&oacute;n sensible puede permanecer en su IT local.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonHibrida" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Híbrida')">Seleccione</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Sab&iacute;a que...</h2>
	            						<p>... tienen una buena aceptaci&oacute;n en las empresas de cara a un futuro pr&oacute;ximo, ya que se est&aacute;n desarrollando software de
	            						 gesti&oacute;n de nubes para poder gestionar la nube privada y a su vez adquirir recursos en los grandes proveedores p&uacute;blicos.</p>
	            						<small>(IDC, septiembre 2016)</small>
		            				</div>
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido4.png">
		            				</div>
		            			</div>
		            		</div>
		            	</div>
					</div>
				</div>
				<div id="window5-page" class="window-center opacity-done">
					<div class="mdl-container text-center">
						<div class="question">
		            		<span class="number">05/05</span>
		            		<div class="question-respuestas">
		            			<p><span>Basados en sus respuestas,</span> tenemos en mente una soluci&oacute;n ideal para su negocio.</p>
		            		</div>
		            	</div>
		            	<div class="mdl-solicitud">
			            	<div class="mdl-card-confirmacion">
		            			<div class="mdl-respuestas text-left">
		            				<h2 class="title-formulario m-b-10">Sus respuestas fueron:</h2>
		            				<div class="contenedor-respuestas">
	            						<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul>
			            							<li id="industria">Retail</li>
			            						</ul>
			            						<button id="window1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 1)">Editar</button>
			            					</div>
			            				</div>
			            				<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul>
			            							<li id="tamanio">1 - 50</li>
			            						</ul>
			            						<button id="window2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 2)">Editar</button>
			            					</div>
			            				</div>
			            				<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul>
			            							<li id="factura">1-3 Millones de D&oacute;lares</li>
			            						</ul>
			            						<button id="window2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 2)">Editar</button>
			            					</div>
			            				</div>
			            				<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul id="prioridad">
			            						</ul>
			            						<button id="window3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 3)">Editar</button>
			            					</div>
			            				</div>
			            				<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul>
			            							<li id="infraestructura">Local</li>
			            						</ul>
			            						<button id="window4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 4)">Editar</button>
			            					</div>
			            				</div>
		            				</div>
		            				<div class="col-xs-12 p-0 text-right m-t-10">
		            					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="ConfirmarRespuestas()">Confirmar respuestas</button>
		            				</div>
			            		</div>
			            		<div class="mdl-back-respuestas">
		        					<div class="mdl-back-contenido">
		        						<span>10,511</span>
		        						<p>empresas en nuestra regi&oacute;n utilizan SAP Business One.</p>
		        						<small>(Samuli Ajo, Global Customer Counting)</small>
		        					</div>
		        					<div class="mdl-back-contenido second">
		        						<span>40 a 60%</span>
		        						<p>de reducci&oacute;n en las cargas administrativas de su negocio.</p>
		        					</div>
		        					<div class="mdl-back-contenido">
		        						<span>103</span>
		        						<p>partners especializados en SAP Business One para nuestra regi&oacute;n.</p>
		        						<small>(Vinicius Ricarte, Channel Sales Development)</small>
		        					</div>
			            		</div>
		            		</div>
		            		<form class="mdl-formulario disabled text-left">
		            			<div class="content-datos">
		            				<div class="content-personal">
		            					<p><i class="mdi mdi-arrow_downward"></i>Introduzca aqu&iacute; sus datos</p>
		            				</div>
		            				<div class="content-separacion">
		            					<p>o</p>
		            				</div>
		            				<div class="content-linkedin">
		            					<a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>Conéctese v&iacute;a LinkedIn</a>
		            				</div>
		            			</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
									    <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Nombre Completo">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
								    	<input type="text" class="form-control NEGRO_FONDO" id="cargo" maxlength="50" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="Cargo">
								  	</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="text" class="form-control" id="empresa" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Empresa">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Teléfono">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="Email">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-select mdl-standar">
										<select class="selectpicker" id="relacion" name="relacion" title="Relación con SAP">
											<option value="Cliente">Cliente</option>
											<option value="Cliente potencial">Cliente potencial</option>
											<option value="Consultor">Consultor</option>
											<option value="Empleado SAP">Empleado SAP</option>
											<option value="Estudiante">Estudiante</option>
											<option value="Partner">Partner</option>
											<option value="Partner potencial">Partner potencial</option>
											<option value="Prensa/Analista">Prensa/Analista</option>
										</select>
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="text" class="form-control" id="pais" maxlength="100" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="País">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<p class="text-contacto">Quiero ser contactado por un representante de ventas:</p>
		        					<div class="mdl-input-label">
		        						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
											<input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
											<span class="mdl-radio__label">Por email</span>
										</label>
		        					</div>
		        					<div class="mdl-input-label">
		        						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
											<input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
											<span class="mdl-radio__label">Por tel&eacute;fono</span>
										</label>
		        					</div>
		        					<div class="mdl-input-label">
		        						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-ambos">
											<input type="radio" id="c-ambos" class="mdl-radio__button" name="options" value="3">
											<span class="mdl-radio__label">Ambos</span>
										</label>
		        					</div>
		        				</div>
		        				<div class="col-xs-12 mdl-label m-t-10">
		    						<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
										<input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
										<span class="mdl-checkbox__label f-s-14" style="">He le&iacute;do y acepto los <a class="FONDO_TERMINOS" href="https://www.sap.com/corporate/en/legal/terms-of-use.html" target="_blank" style="">Términos y condiciones de SAP</a></span>
									</label>
		        				</div>
		        				<div class="col-xs-12 text-right m-t-25">
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="solicitarEstimacion();">Enviar informaci&oacute;n</button>
		        				</div>
		            		</form>
	            		</div>
	            	</div>
            		<div class="mdl-agradecimiento">
            			<h2>Gracias por su interés</h2>
            			<p>Un representante de SAP se pondrá en contacto con Usted para ayudarlo a dar el primer paso.</p>
            		</div>
				</div>
				<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-arrow button-prev" onclick="buttonQuestion(1)">
					<div class="arrow arrow-left"></div>
				</button>
    			<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-arrow button-next" onclick="buttonQuestion(2)">
					<div class="arrow arrow-right"></div>
				</button>
			</div>
	    </div>
	</section>
	
	<!--MODAL-->
	<div class="modal fade" id="ModalQuestion" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm text-center">
            <div class="modal-content">
                <div class="mdl-card" >
                    <div class="mdl-card__title p-0">
						<img alt="" src="">
					</div>
				    <div class="mdl-card__supporting-text">
                        <h2>Sabía que...</h2>
                        <p></p>
                        <small></small>
					</div> 
    				<div class="mdl-card__menu">        				    
                        <button class="mdl-button mdl-js-button mdl-button--icon" onclick="closeModal()"><i class="mdi mdi-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-ui.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-migrate-1.2.1.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        $(window).load(function() {
        	  /*if(<?php echo $pantalla1 ?> == 3) {
				m = 5; 
				if(<?php echo $confirmar ?> == 1) {
					$('.button-arrow.button-prev').css("display","none");
					$('.mdl-card-confirmacion').addClass('confirmar');
					$('.mdl-formulario').removeClass('disabled');
					confirmar = 1;
				}
	        	var fifthWindow   = $('#window5-page');
	        	var homePage      = $('#home');
			    $('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			    homePage.css("display","none");
				fifthWindow.addClass('animated fadeInLeft');
				if(<?php echo $confirmar ?> == 0) {
					$('.button-arrow.button-prev').css("display","block");
				}
				$('.header').addClass('opacity');
				$('.logo-bottom').addClass('opacity');
				/*$('#telefono').css('border-color','red');
				$('#nombre_completo').val("<?php echo $nombre_comple ?>");
				$('#email').val("<?php echo $email_link ?>");
				$('#pais').val("<?php echo $pais_link ?>");
				if("<?php echo $tit ?>" == '') {
					$('#cargo').css('border-color','red');
				}
				if("<?php echo $comp ?>" == '') {
					$('#empresa').css('border-color','red');
				}
				$('#cargo').val("<?php echo $tit ?>");
				$('#empresa').val("<?php echo $comp ?>");
				$('#industria').text("<?php echo $industria ?>");
				$('#tamanio').text("<?php echo $Tamanio ?>");//falta agregar empleados
				$('#factura').text("<?php echo $Factura_anual ?>");
				$('#prioridad').append("<?php echo $priori ?>");
				$('#infraestructura').text("<?php echo $Infraestructura ?>");*/
			//}
		});
    </script>
</body>
</html>