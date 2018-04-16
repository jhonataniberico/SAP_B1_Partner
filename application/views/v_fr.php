<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="Projet de développement d'un produit d'assistant en ligne avec un quiz et une solution unique, SAP Business One">
    <meta name="keywords"               content="SAP, produit de l'assistant">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="January 25, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	<title>SAP Business One</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.png">
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
							<option value="Francés">Fran&ccedil;ais</option>
							<option value="Español">Espa&ntilde;ol</option>
						</select>
    				</div>
		    	</div>
    			<div class="mdl-container mdl-all-window">
    				<div class="first-eslogan">
    					<img class="logo-home" src="<?php echo RUTA_IMG?>logo/logo_partner.png">
	            		<h2 class="title-home">&Eacute;crivez votre slogan ici</h2>
    				</div>
	    			<div class="second-eslogan">
	    				<img class="logo-home" src="<?php echo RUTA_IMG?>logo/logo_header.png">
	            		<h2 class="title-home">Diff&eacute;rents scénarios, une seule solution.</h2>
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
	    				<!-- <h2>Etes-vous prêt pour SAP Business One &#63;</h2> -->
	    			</div>
	    			<div class="header-right">
	    				<button class="mdl-button mdl-js-button mdl-button--icon button-home" onclick="returnHome()"><i class="mdi mdi-home"></i></button>
	    				<div class="mdl-idioma">
							<select class="selectpicker" id="Idioma"  name="Idioma" onchange="cambiarIdioma()">
								<option value="Francés">Fran&ccedil;ais</option>
								<option value="Español">Espa&ntilde;ol</option>
							</select>
	    				</div>
						<div class="background3"></div>
						<div class="background2"></div>
						<div class="background1"></div>
	    			</div>
	    		</div>
	    		<div class="logo-bottom">
        			<img src="http://www.sap-latam.com/sap_business_one/public/img/logo/logo_home.png">
		    		<div class="bottom-right">
						<p>Vous pouvez s&eacute;lectionner plus d'une option</p>
		    		</div>
        		</div>
        		<div class="chat">
        			<a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/476282014" target="_blank"><img src="<?php echo RUTA_IMG?>chat.png"><label>Dialoguer avec nous</label></a>
        		</div>
				<div id="window1-page" class="window-center opacity-done">
					<div class="mdl-container text-center">
						<div class="question">
			        		<span class="number">01/05</span>
			        		<h2>Quelle est votre industrie &#63;</h2>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-profesional.png">
			        				<p>Services professionnels</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Services professionnels')">S&eacute;lectionner</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Le saviez-vous &#63;</h2>
			    						<p>Les entreprises leaders de conseil et de services professionnels utilisent la technologie de mani&agrave;re innovante pour perfectionner les pratiques commerciales, renforcer l’agilit&eacute; et am&eacute;liorer le service client.</p>
			    						<small>(IDC, septembre 2016)</small>
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
			        			<button id="buttonCard2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Retail')">S&eacute;lectionner</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Le saviez-vous &#63;</h2>
			    						<p>Pour chaque nouvel innovateur qui propose un nouveau march&eacute; ou type de produit, une centaine de marchés sont r&eacute;duits ou paralys&eacute;s.</p>
			    						<small>(IDC, septembre 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-distribucion.png">
			        				<p>Distribution</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Distribution')">S&eacute;lectionner</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Le saviez-vous &#63;</h2>
			    						<p>Vous pouvez augmenter de mani&egrave;re générale l’exp&eacute;rience client en utilisant des processus rapides et en mettant en place une prise de commande multicanal.</p>
			    						<small>(SAP Performance Benchmarking)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			    			<div class="flip-card">
			    				<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-producto.png">
			        				<p>Biens de consommation</p>
			        			</div>
			    			</div>
			    			<div class="content-card">
			        			<button id="buttonCard4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Biens de consommation')">S&eacute;lectionner</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Le saviez-vous &#63;</h2>
			    						<p>Les leaders de cette industrie réinventent leurs manières d’opérer et utilisent la technologie comme outil pour perfectionner leurs pratiques commerciales et renforcer la satisfaction de leurs clients et distributeurs.</p>
			    						<small>(IDC, September 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-proceso.png">
			        				<p>Production/Industriel</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Production/Industriel')">S&eacute;lectionner</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Le saviez-vous &#63;</h2>
			    						<p>Les coûts de fabrication peuvent être réduits de 19% avec un suivi en temps réel des différentes variables agissant sur les coûts de production.</p>
			    						<small>(IDC, septembre 2016)</small>
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
		            		<h2>Quelle est la taille de votre entreprise&#63;</h2>
		            	</div>
		            	<div class="mdl-flex">
	            			<div class="mdl-card-question">
		            			<div class="flip-card">
		            				<div class="card-front card-front-none">
			            				<img src="<?php echo RUTA_IMG?>cards/card-empleados.png">
			            				<p>Nombre d’employ&eacute;s</p>
			            			</div>
		            			</div>
		            			<div class="content-card">
		            				<div class="select-empleados">
		            					<button id="buttonMenos" class="mdl-button mdl-js-button mdl-button--icon select-one" onclick="operar(this.id,1)"><i class="mdi mdi-remove"></i></button>
		            					<span id="textOperar">S&eacute;lectionner</span>
		            					<button id="buttonMas" class="mdl-button mdl-js-button mdl-button--icon select-one" onclick="operar(this.id,2)"><i class="mdi mdi-add"></i></button>
		            				</div>
			            			<div class="contenido">
			            				<div class="contenido-left">
			            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
			            				</div>
			            				<div class="contenido-right">
		            						<h2>Le saviez-vous &#63;</h2>
		            						<p>La qualité des &eacute;changes avec les clients et les consommateurs est le point de départ pour augmenter le r&eacute;sultat des petites et moyennes entreprises de biens de consommation.</p>
		            						<small>(IDC, September  2016)</small>
			            				</div>
			            			</div>
			            		</div>
			            	</div>
			            	<div class="mdl-card-question visi-hidden">
			            		<div class="flip-card">
			            			<div class="card-front card-front-none">
			            				<img src="<?php echo RUTA_IMG?>cards/card-facturacion.png">
			            				<p>Facturation annuelle</p>
			            			</div>
			            		</div>
			            		<div class="content-card">
			            			<div class="row">
			            				<div class="col-xs-12">
			            					<div class="mdl-select">
			            						<select class="selectpicker" id="facturacion" name="facturacion" title="Select" onchange="selectFacturacion(this.id)">
													<option value="< 1 Million d'Euro">< 1 Million d'Euro</option>
													<option value="1 -3 Millions d'Euro">1 -3 Millions d'Euro</option>
													<option value="3 - 5  Millions d'Euro">3 - 5  Millions d'Euro</option>
													<option value="5 - 10 Millions d'Euro">5 - 10 Millions d'Euro</option>
													<option value="10 - 20 Millions d'Euro">10 - 20 Millions d'Euro</option>
													<option value="20 - 40  Millions d'Euro">20 - 40  Millions d'Euro</option>
													<option value="Je n'ai pas l'information">Je n'ai pas l'information</option>
												</select>
			            					</div>
				            			</div>
			            			</div>
			            			<div class="contenido">
			            				<div class="contenido-left">
			            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
			            				</div>
			            				<div class="contenido-right">
		            						<h2>Le saviez-vous &#63;</h2>
		            						<p>L’augmentation des emails commerciaux repr&eacute;sente aujourd'hui un peu plus de 10% des ventes globales.</p>
		            						<small>(IDC, septembre 2016)</small>
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
		            		<h2>Quelle(s) est(sont) votre(vos) priorité(s)&#63;</h2>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-cloud.png">
		            				<p>Cloud</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Utiliser le Cloud pour se concentrer sur la croissance plutôt que l’impl&eacute;mentation et la gestion IT.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonCloud" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Cloud')">Sélectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>Plus de 90% des entreprises utilisent déjà la technologie Cloud dans un environnement public, priv&eacute; ou hybride.</p>
	            						<small>(IDC, septembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-anywhere.png">
		            				<p>Mobilité</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Offrir aux employ&eacute;s un accès au logiciel par le biais d'une application mobile intuitive.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonAnywhere" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Mobilité')">Sélectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>Vous pouvez acc&eacute;der &aacute; une analyse int&eacute;gr&eacute;e pour une prise de d&eacute;cision en temps r&eacute;el.</p>
	            						<small>(IDC, spetembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img class="m-b-0" src="<?php echo RUTA_IMG?>cards/card-sap.png">
		            				<p>Analyse en temps r&eacute;el avec SAP HANA</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Votre temps d’analyse peut &ecirc;tre r&eacute;duit de 70% avec la puissance de SAP HANA.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonSap" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Analyse en temps réel avec SAP HANA')">S&eacute;lectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>SAP Business One utilise la technologie In-Memory Computing pour cr&eacute;er des rapports et analyses.</p>
	            						<small>(IDC, septembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img class="m-b-0" src="<?php echo RUTA_IMG?>cards/card-analytics.png">
		            				<p>Une analyse pr&eacute;dictive avec l'analytique</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Anticiper les résultats avec des analyses prédictives et orienter votre entreprise vers la bonne direction.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonAnalytics" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Une analyse prédictive avec l&acute;analytique')">Sélectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>Vous obtiendrez les moyens pour explorer, augmenter et analyser instantan&eacute;ment les donn&eacute;es pratiquement en temps r&eacute;el.</p>
	            						<small>(IDC, septembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-starup.png">
		            				<p>Entreprenariat</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Avoir un alli&eacute; pour faire face aux d&eacute;fis de l’&eacute;re digitale et atteindre vos objectifs.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonStarup" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Entreprenariat')">S&eacute;lectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>35% des revendeurs de petite et moyenne taille ont investi dans une technologie pour accompagner leur croissance.</p>
	            						<small>(IDC, septembre 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-subsidaries.png">
		            				<p>Filiales et succursales</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Cr&eacute;er rapidement des rapports pr&eacute;cis sur les livraisons entrantes et sortantes, les inventaires et la traçabilit&eacute; des produits.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonSubsidaries" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Filiales et succursales')">S&eacute;lectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>Une plateforme flexible qui vous fera d&eacute;couvrir tout le potentiel de votre &eacute;cosyst&agrave;me.</p>
	            						<small>(IDC, septembre 2016)</small>
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
		            		<h2 class="unique">Quel type d’infrastructure recherchez-vous&#63;</h2>
		            	</div>
		            	<div class="mdl-card-question">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-local.png">
		            				<p>Local</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Impl&eacute;menter dans votre infrastructure actuelle ou investir dans des options hardwares certifi&eacute;es.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonLocal" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Local')">S&eacute;lectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>Ces applications (e-commerce, point de vente, place de march&eacute;, CRM, etc.) peuvent facilement &ecirc;tre connect&eacute;es &agrave; SAP Business One quand cela est r&eacute;alis&eacute; On-Premise.</p>
	            						<small>(IDC, septembre 2016)</small>
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
		            				<label>Utiliser un logiciel dans le Cloud avec les informations de mon activit&eacute;.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonCloudI" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Cloud')">S&eacute;lectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>21% des entreprises sont de plus en plus int&eacute;ress&eacute;es par une alternative Cloud plut&ocirc;t que du On-Premise.</p>
	            						<small>(IDC, septembre 2016)</small>
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
		            				<p>Hybride</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Combiner les deux infrastructures pour que vos informations sensibles demeurent dans votre environnement IT local.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonHibrida" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Hybrid')">S&eacute;lectionner</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Le saviez-vous &#63;</h2>
	            						<p>Les soci&eacute;t&eacute;s envisagent sereinement l’avenir depuis que les logiciels de management Cloud se d&eacute;veloppent pour pouvoir g&eacute;rer du Cloud priv&eacute; en m&ecirc;me temps qu’elles acquirent des ressources aupr&agrave;s de large fournisseurs publics.</p>
	            						<small>(IDC, septembre 2016)</small>
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
		            			<p><span>Selon vos r&eacute;ponses,</span> nous avons une solution id&acute;ale pour votre entreprise.</p>
		            		</div>
		            	</div>
		            	<div class="mdl-solicitud">
			            	<div class="mdl-card-confirmacion">
		            			<div class="mdl-respuestas text-left">
		            				<h2 class="title-formulario m-b-10">Vos r&eacute;ponses sont:</h2>
		            				<div class="contenedor-respuestas">
	            						<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul>
			            							<li id="industria">Retail</li>
			            						</ul>
			            						<button id="window1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 1)">Editer</button>
			            					</div>
			            				</div>
			            				<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul>
			            							<li id="tamanio">1 - 50</li>
			            						</ul>
			            						<button id="window2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 2)">Editer</button>
			            					</div>
			            				</div>
			            				<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul>
			            							<li id="factura">1 -3 Millions d'Euro</li>
			            						</ul>
			            						<button id="window2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 2)">Editer</button>
			            					</div>
			            				</div>
			            				<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul id="prioridad">
			            						</ul>
			            						<button id="window3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 3)">Editer</button>
			            					</div>
			            				</div>
			            				<div class="col-xs-12 p-0">
			            					<div class="div-respuestas">
			            						<ul>
			            							<li id="infraestructura">Local</li>
			            						</ul>
			            						<button id="window4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 4)">Editer</button>
			            					</div>
			            				</div>
		            				</div>
		            				<div class="col-xs-12 p-0 text-right m-t-10">
		            					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="ConfirmarRespuestas()">Confirmer les  r&eacute;ponses</button>
		            				</div>
			            		</div>
			            		<div class="mdl-back-respuestas">
		        					<div class="mdl-back-contenido">
		        						<span>10 511</span>
		        						<p>soci&eacute;t&eacute;s dans votre r&eacute;gion utilisent SAP Business One.</p>
		        						<small>(Samuli Ajo, Global Customer Counting)</small>
		        					</div>
		        					<div class="mdl-back-contenido second">
		        						<span>40% &agrave; 60%</span>
		        						<p>de r&eacute;duction de la charge administrative de votre entreprise.</p>
		        					</div>
		        					<div class="mdl-back-contenido">
		        						<span>103</span>
		        						<p>partenaires sp&eacute;cialis&eacute;s sur SAP Business One dans votre r&eacute;gion.</p>
		        						<small>(Vinicius Ricarte, Channel Sales Development)</small>
		        					</div>
			            		</div>
		            		</div>
		            		<form class="mdl-formulario disabled text-left">
		            			<div class="content-datos">
		            				<div class="content-personal">
		            					<p><i class="mdi mdi-arrow_downward"></i>Entrer vos informations ici</p>
		            				</div>
		            				<div class="content-separacion">
		            					<p>ou</p>
		            				</div>
		            				<div class="content-linkedin">
		            					<a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>connecter vous via LinkedIn</a>
		            				</div>
		            			</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
									    <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Nom complet">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
								    	<input type="text" class="form-control NEGRO_FONDO" id="cargo" maxlength="50" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="Poste">
								  	</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="text" class="form-control" id="empresa" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Société">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Téléphone">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="Email">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-select mdl-standar">
										<select class="selectpicker" id="relacion" name="relacion" title="Relation avec SAP">
											<option value="Client">Client</option>
											<option value="Client potentiel">Client potentiel</option>
											<option value="Consultant">Consultant</option>
											<option value="Employé SAP">Employ&eacute; SAP</option>
											<option value="Etudiant">Etudiant</option>
											<option value="Partenaire">Partenaire</option>
											<option value="Partenaire potentiel">Partenaire potentiel</option>
											<option value="Presse/Analyste">Presse/Analyste</option>
										</select>
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="text" class="form-control" id="pais" maxlength="100" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="Country">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<p class="text-contacto">J'aimerais être recontact&eacute; par un repr&eacute;sentant SAP:</p>
		        					<div class="mdl-input-label">
		        						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
											<input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
											<span class="mdl-radio__label">Par email</span>
										</label>
		        					</div>
		        					<div class="mdl-input-label">
		        						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
											<input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
											<span class="mdl-radio__label">Par t&eacute;l&eacute;phone</span>
										</label>
		        					</div>
		        					<div class="mdl-input-label">
		        						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-ambos">
											<input type="radio" id="c-ambos" class="mdl-radio__button" name="options" value="3">
											<span class="mdl-radio__label">Les deux</span>
										</label>
		        					</div>
		        				</div>
		        				<div class="col-xs-12 mdl-label m-t-10">
		    						<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
										<input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
										<span class="mdl-checkbox__label f-s-14" style="">J'ai lu et accepte les<a class="FONDO_TERMINOS" href="https://www.sap.com/corporate/en/legal/terms-of-use.html" target="_blank"> termes et conditions SAP</a></span>
									</label>
		        				</div>
		        				<div class="col-xs-12 text-right m-t-25">
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="solicitarEstimacion();">Envoyer les informations</button>
		        				</div>
		            		</form>
	            		</div>
	            	</div>
            		<div class="mdl-agradecimiento">
            			<h2>Merci pour votre int&eacute;r&ecirc;t.</h2>
            			<p>Un expert SAP vous recontactera pour vous aider dans votre r&eacute;fl&eacute;xion.</p>
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
                        <h2>Le saviez-vous&#63;</h2>
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
    <script src="<?php echo RUTA_JS?>index_fr.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        window.addEventListener("load", function() {
            setTimeout(function() {
            	$('.first-eslogan').addClass('animated fadeOutLeft');
            	$('.second-eslogan').addClass('animated fadeInRight');
            },3000);
        });
        $(window).load(function() {
        	  if(<?php echo $pantalla1 ?> == 5) {
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
				$('#telefono').css('border-color','red');
				//$('#nombre_completo').val("<?php echo $nombre_comple ?>");
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
				$('#infraestructura').text("<?php echo $Infraestructura ?>");
			}
		});
    </script>
</body>
</html>