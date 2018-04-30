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
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
</head>
<body>
	<section id="principal">
	    <div class="section">
	    	<div id="partner" class="window-center">
				<div class="header partner">
	    			<div class="header-right">
	    				<div class="mdl-idioma"></div>
						<div class="background1"></div>
						<div class="background2"></div>
						<div class="background3"></div>
	    			</div>
	    		</div>
	    		<div class="logo-top">
	    			<img src="<?php echo RUTA_IMG?>logo/categoria_gold.png">
	    		</div>
	    		<div class="mdl-container mdl-all-window">
	    			<img class="logo-home partner" src="<?php echo RUTA_IMG?>logo/<?php echo $logo.'.png' ?>">
	    			<div class="eslogan">
	    				<h2 class="title-home partner first-eslogan"><?php echo $eslogan ?></h2>
	            		<h2 class="title-home partner second-eslogan">A sua empresa est&aacute; pronta para o SAP Business One&#63;</h2>
	    			</div>
	    		</div>
	    		<div class="button-next-prev partner">
	    			<a class="link-empezar">come&ccedil;ar</a>
	    			<button id="buttonNextPartner" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect button-arrow button-next" onclick="buttonNextPartner()">
						<div class="arrow arrow-right"></div>
					</button>
	    		</div>
	    		<div class="fondo-bottom fondo-partner continue"></div>
	    	</div>
    		<div id="home" class="window-center opacity-done">
    			<div class="header-home">
					<img src="<?php echo RUTA_IMG?>logo/logo_home.png">
					<div class="mdl-idioma"></div>
		    	</div>
    			<div class="mdl-container mdl-all-window">
	    			<img class="logo-home" src="<?php echo RUTA_IMG?>logo/logo_header.png">
	            	<h2 class="title-home">Diferentes cen&aacute;rios. Uma solu&ccedil;&atilde;o</h2>
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
	    		<div class="fondo-bottom">
	    			<img src="<?php echo RUTA_IMG?>fondo/fondo.png">
	    		</div>
    		</div>
			<div class="mdl-container-question">
				<div class="header">
	    			<div class="header-left">
	    				<img class="logo-header" src="<?php echo RUTA_IMG?>logo/<?php echo $logo.'.png' ?>">
	    				<img class="logo-partner" src="<?php echo RUTA_IMG?>logo/categoria_gold.png">
	    			</div>
	    			<div class="header-right none-idioma">
	    				<button class="mdl-button mdl-js-button mdl-button--icon button-home" onclick="returnHome()"><i class="mdi mdi-home"></i></button>
						<div class="background1"></div>
						<div class="background2"></div>
						<div class="background3"></div>
	    			</div>
	    		</div>
	    		<div class="logo-bottom">
        			<img src="http://www.sap-latam.com/sap_business_one/public/img/logo/logo_home.png">
		    		<div class="bottom-right">
						<p>Voc&ecirc; pode selecionar mais de uma op&ccedil;&atilde;o</p>
		    		</div>
        		</div>
        		<div class="chat">
        			<a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005714" target="_blank"><img src="<?php echo RUTA_IMG?>chat.png"><label>Fale Conosco</label></a>
        		</div>
				<div id="window1-page" class="window-center opacity-done">
					<div class="mdl-container text-center">
						<div class="question">
			        		<span class="number">01/05</span>
			        		<h2>Em que setor voc&ecirc; atua&#63;</h2>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-profesional.png">
			        				<p>Servi&ccedil;os profissionais</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Serviços profissionais')">Selecione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Voc&ecirc; sabia que...</h2>
			    						<p>... os prestadores de servi&ccedil;os de sucesso aproveitam a tecnologia em novas formas para aperfei&ccedil;oar as pr&aacute;ticas de neg&oacute;cio, aumentar a agilidade e atender melhor aos clientes.</p>
			    						<small>(IDC, Setembro 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			    				<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-retail.png">
			        				<p>Varejo</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Varejo')">Selecione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Voc&ecirc; sabia que...</h2>
			    						<p>... para cada inovador que cria um novo mercado ou tipo de produto, h&aacute; no m&iacute;nimo uma centena de mercados que paralisam ou sofrem redu&ccedil;&atilde;o.</p>
			    						<small>(IDC, Setembro 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-distribucion.png">
			        				<p>Distribui&ccedil;&atilde;o</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Distribuição')">Selecione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Voc&ecirc; sabia que...</h2>
			    						<p>... pode melhorar a  experi&ecirc;ncia geral do cliente com a realizaç&atilde;o de pedidos multicanal e seu processamento r&aacute;pido.</p>
			    						<small>(SAP Performance Benchmarking)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			    			<div class="flip-card">
			    				<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-producto.png">
			        				<p>Bens de Consumo</p>
			        			</div>
			    			</div>
			    			<div class="content-card">
			        			<button id="buttonCard4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Produto de Consumo')">Selecione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Voc&ecirc; sabia que...</h2>
			    						<p>... as empresas de sucesso no setor reinventam sua forma de operar, aproveitando a tecnologia para aperfei&ccedil;oar as pr&aacute;ticas de neg&oacute;cio, aumentar a agilidade e atender melhor  aos clientes e distribuidores.</p>
			    						<small>(IDC, Setembro 2016)</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        	<div class="mdl-card-question">
			        		<div class="flip-card">
			        			<div class="card-front card-front-none">
			        				<img src="<?php echo RUTA_IMG?>cards/card-proceso.png">
			        				<p>Processo/Manufatura</p>
			        			</div>
			        		</div>
			        		<div class="content-card">
			        			<button id="buttonCard5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select select-one" onclick="guardarDatos(this.id,'Processo/Manufatura')">Selecione</button>
			        			<div class="contenido">
			        				<div class="contenido-left">
			        					<img src="<?php echo RUTA_IMG?>cards/card-contenido.png">
			        				</div>
			        				<div class="contenido-right">
			    						<h2>Voc&ecirc; sabia que...</h2>
			    						<p>... &eacute; poss&iacute;vel  reduzir o custo de fabrica&ccedil;&atilde;o em  19% com controle em tempo real do custo de produ&ccedil;&atilde;o e suas variantes.</p>
			    						<small>(IDC, Setembro 2016)</small>
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
		            		<h2>Qual o tamanho da sua empresa&#63;</h2>
		            	</div>
		            	<div class="mdl-flex">
	            			<div class="mdl-card-question">
		            			<div class="flip-card">
		            				<div class="card-front card-front-none">
			            				<img src="<?php echo RUTA_IMG?>cards/card-empleados.png">
			            				<p>N&uacute;mero de funcion&aacute;rios</p>
			            			</div>
		            			</div>
		            			<div class="content-card">
		            				<div class="select-empleados">
		            					<button id="buttonMenos" class="mdl-button mdl-js-button mdl-button--icon select-one" onclick="operar(this.id,1)"><i class="mdi mdi-remove"></i></button>
		            					<span id="textOperar">Selecione</span>
		            					<button id="buttonMas" class="mdl-button mdl-js-button mdl-button--icon select-one" onclick="operar(this.id,2)"><i class="mdi mdi-add"></i></button>
		            				</div>
			            			<div class="contenido">
			            				<div class="contenido-left">
			            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
			            				</div>
			            				<div class="contenido-right">
		            						<h2>Voc&ecirc; sabia que...</h2>
		            						<p>... a intera&ccedil;&atilde;o com os clientes e os consumidores &eacute; o ponto de partida para o crescimento da receita das pequenas e m&eacute;dias empresas de produtos de consumo.</p>
		            						<small>(IDC, Setembro  2016)</small>
			            				</div>
			            			</div>
			            		</div>
			            	</div>
			            	<div class="mdl-card-question visi-hidden">
			            		<div class="flip-card">
			            			<div class="card-front card-front-none">
			            				<img src="<?php echo RUTA_IMG?>cards/card-facturacion.png">
			            				<p>Faturamento anual</p>
			            			</div>
			            		</div>
			            		<div class="content-card">
			            			<div class="row">
			            				<div class="col-xs-12">
			            					<div class="mdl-select">
			            						<select class="selectpicker" id="facturacion" name="facturacion" title="Selecione" onchange="selectFacturacion(this.id)">
													<option value="< 1 Milhão de dólares">< 1 Milh&atilde;o de d&oacute;lares</option>
													<option value="1 - 3 Milhões de dólares">1 - 3 Milh&otilde;es de d&oacute;lares</option>
													<option value="3 - 5 Milhões de dólares">3 - 5 Milh&otilde;es de d&oacute;lares</option>
													<option value="5 - 10 Milhões de dólares">5 - 10 Milh&otilde;es de d&oacute;lares</option>
													<option value="10 - 20 Milhões de dólares">10 - 20 Milh&otilde;es de d&oacute;lares</option>
													<option value="20 - 40 Milhões de dólares">20 - 40 Milh&otilde;es de d&oacute;lares</option>
													<option value="I have no information">Sem informa&ccedil;&atilde;o</option>
												</select>
			            					</div>
				            			</div>
			            			</div>
			            			<div class="contenido">
			            				<div class="contenido-left">
			            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
			            				</div>
			            				<div class="contenido-right">
		            						<h2>Voc&ecirc; sabia que...</h2>
		            						<p>... o aumento das vendas por e-mail, agora &eacute; pouco mais de 10% do total de vendas.</p>
		            						<small>(IDC, Setembro  2016)</small>
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
		            		<h2>Qual &eacute; a prioridade da sua empresa&#63;</h2>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-cloud.png">
		            				<p>Nuvem</p> 
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Aproveitar a nuvem para se concentrar em crescer, e n&atilde;o em implementar e gerenciar sua  TI.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonCloud" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Nuvem')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p>... mais de 90% das empresas j&aacute; est&atilde;o usando tecnologia de nuvem em ambiente p&uacute;blico, privado ou h&iacute;brido.</p>
	            						<small>(IDC, Setembro  2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-anywhere.png">
		            				<p>Mobilidade</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Oferecer aos funcion&aacute;rios acesso a software atrav&eacute;s de um aplicativo m&oacute;vel intuitivo.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonAnywhere" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Mobility')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p>... pode acessar an&aacute;lises integradas para tomar decis&otilde;es em tempo real.</p>
	            						<small>(IDC, Setembro 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img class="m-b-0" src="<?php echo RUTA_IMG?>cards/card-sap.png">
		            				<p>An&aacute;lise em tempo real com o SAP HANA</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Com o poder do SAP HANA &eacute; poss&iacute;vel reduzir seu tempo de an&aacute;lise em 70%.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonSap" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Análise em tempo real com o SAP HANA')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p>... o Business One aproveita uma tecnologia In-Memory Computing para gerar informa&ccedil;&otilde;es e  an&aacute;lise.</p>
	            						<small>(IDC, Setembro 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img class="m-b-0" src="<?php echo RUTA_IMG?>cards/card-analytics.png">
		            				<p>An&aacute;lises preditivas com o Analytics</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Antecipar resultados com an&aacute;lise preditiva e dar a dire&ccedil;&atilde;o certa para sua empresa.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonAnalytics" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Análises preditivas com o Analytics')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p>... obter&aacute; a capacidade de explorar, aumentar e analisar de forma instantânea todos os dados praticamente em tempo real.</p>
	            						<small>(IDC, Setembro 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-starup.png">
		            				<p>Empreendedores</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Contar com um aliado, para enfrentar os desafios  da era digital e conquistar suas metas.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonStarup" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Empreendedores')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p>... 35% dos varejistas pequenos e m&eacute;dios investiram em tecnologia para aumentar a receita.</p>
	            						<small>(IDC, Setembro 2016)</small>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            	<div class="mdl-card-question mdl-card-3">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-subsidaries.png">
		            				<p>Ag&ecirc;ncias ou subsidi&aacute;rias</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Criar informa&ccedil;&otilde;es r&aacute;pidas e precisas sobre envios de entrada e sa&iacute;da, invent&aacute;rios e localizaç&atilde;o dos produtos.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card">
		            			<button id="buttonSubsidaries" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-prioridad" onclick="guardarDatos(this.id,'Agências ou subsidiárias')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-left">
		            					<img src="<?php echo RUTA_IMG?>cards/card-contenido3.png">
		            				</div>
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p>... h&aacute; uma plataforma empresarial flex&iacute;vel que lhe permitir&aacute; descobrir todo o potencial de seu ecossistema.</p>
	            						<small>(IDC, Setembro 2016)</small>
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
		            		<h2 class="unique">Que tipo de infraestrutura voc&ecirc; est&aacute; procurando&#63;</h2>
		            	</div>
		            	<div class="mdl-card-question">
		            		<div class="flip-card">
		            			<div class="card-front">
		            				<img src="<?php echo RUTA_IMG?>cards/card-local.png">
		            				<p>Local</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Implementar em sua atual infraestrutura ou adquirir uma das op&ccedil;&otilde;es de hardware certificado.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonLocal" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Local')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p style="height: 116px;">... &eacute; poss&iacute;vel fazer uma conex&atilde;o destes aplicativos (com&eacute;rcio eletr&ocirc;nico, ponto de venda, Marketplace, CRM, etc.) com o SAP Business One facilmente quando se usa o On-Premise.</p>
	            						<small>(IDC, Setembro 2016)</small>
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
		            				<p>Nuvem</p>
									<i class="mdi mdi-add"></i>
		            			</div>
		            			<div class="card-back">
		            				<label>Executar  o software na nuvem juntamente com suas informa&ccedil;&otilde;es empresariais.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonCloudI" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Nuvem')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p style="height: 116px;">... 21% das empresas est&atilde;o cada vez mais interessadas em alternativas ou hospedagem para o que, no momento, executam no local.</p>
	            						<small>(IDC, Setembro 2016)</small>
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
		            				<label>Combinar as duas infraestruturas para que as informa&ccedil;&otilde;es sens&iacute;veis possam permanecer em sua TI local.</label>
									<i class="mdi mdi-remove"></i>
		            			</div>
		            		</div>
		            		<div class="content-card bottom">
		            			<button id="buttonHibrida" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect select-one select-infraestructura" onclick="guardarDatos(this.id,'Híbrida')">Selecione</button>
		            			<div class="contenido">
		            				<div class="contenido-right">
	            						<h2>Voc&ecirc; sabia que...</h2>
	            						<p style="height: 116px;">... elas t&ecirc;m uma boa aceita&ccedil;&atilde;o nas empresas com rela&ccedil;&atilde;o a um futuro pr&oacute;ximo, j&aacute; que est&atilde;o sendo  desenvolvidos softwares de gest&atilde;o de nuvem para gerenciar uma nuvem privada e, no momento certo, adquirir recursos nos grandes provedores p&uacute;blicos.</p>
	            						<small>(IDC, Setembro 2016)</small>
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
		            			<p><span>Com base em suas respostas,</span> temos uma solu&ccedil;&atilde;o ideal para sua empresa.</p>
		            		</div>
		            	</div>
		            	<div class="mdl-solicitud">
			            	<div class="mdl-card-confirmacion">
		            			<div class="mdl-respuestas text-left">
		            				<h2 class="title-formulario m-b-10">Suas respostas foram:</h2>
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
		            					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="ConfirmarRespuestas()">Confirmar respostas</button>
		            				</div>
			            		</div>
			            		<div class="mdl-back-respuestas">
		        					<div class="mdl-back-contenido">
		        						<span>10,511</span>
		        						<p>das empresas em nossa regi&atilde;o usam o SAP Business One.</p>
		        						<small>(Samuli Ajo, Global Customer Counting)</small>
		        					</div>
		        					<div class="mdl-back-contenido second">
		        						<span>40 a 60%</span>
		        						<p>de redu&ccedil;&atilde;o nas cargas administrativas de sua empresa.</p>
		        					</div>
		        					<div class="mdl-back-contenido">
		        						<span>103</span>
		        						<p>parceiros especializados no SAP Business One para nossa regi&atilde;o.</p>
		        						<small>(Vinicius Ricarte, Channel Sales Development)</small>
		        					</div>
			            		</div>
		            		</div>
		            		<form class="mdl-formulario disabled text-left">
		            			<div class="content-datos">
		            				<div class="content-personal">
		            					<p><i class="mdi mdi-arrow_downward"></i>Insira aqui seus dados</p>
		            				</div>
		            				<div class="content-separacion">
		            					<p>ou</p>
		            				</div>
		            				<div class="content-linkedin">
		            					<a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>conecte-se via LinkedIn</a>
		            				</div>
		            			</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
									    <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Nome completo">
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
										<input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Telefone">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="E-mail">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-select mdl-standar">
										<select class="selectpicker" id="relacion" name="relacion" title="Relacionamento com SAP">
											<option value="Cliente">Cliente</option>
											<option value="Cliente em potencial">Cliente em potencial</option>
											<option value="Consultor">Consultor</option>
											<option value="Funcionário da SAP">Funcion&aacute;rio da SAP</option>
											<option value="Estudante">Estudante</option>
											<option value="Parceiro">Parceiro</option>
											<option value="Parceiro em potencial">Parceiro em potencial</option>
											<option value="Imprensa/Analista">Imprensa/Analista</option>
										</select>
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<div class="mdl-input">
										<input type="text" class="form-control" id="pais" maxlength="100" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="País">
									</div>
		        				</div>
		        				<div class="col-sm-6">
		        					<p class="text-contacto">Quero ser contatado por um representante de vendas:</p>
		        					<div class="mdl-input-label">
		        						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
											<input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
											<span class="mdl-radio__label">Por e-mail</span>
										</label>
		        					</div>
		        					<div class="mdl-input-label">
		        						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
											<input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
											<span class="mdl-radio__label">Por telefone</span>
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
										<span class="mdl-checkbox__label f-s-14" style="">Li e aceito os <a class="FONDO_TERMINOS" href="https://www.sap.com/corporate/en/legal/terms-of-use.html" target="_blank" style="">termos e condi&ccedil;&otilde;es da SAP</a></span>
									</label>
		        				</div>
		        				<div class="col-xs-12 text-right m-t-25">
									<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-confirmar" onclick="solicitarEstimacion();">Enviar informa&ccedil;&otilde;es</button>
		        				</div>
		            		</form>
	            		</div>
	            	</div>
            		<div class="mdl-agradecimiento">
            			<h2>Obrigado por seu interesse</h2>
            			<p>Um representante da SAP entrar&aacute; em contato com voc&ecirc; para ajud&aacute;-lo a dar o primeiro passo.</p>
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
                        <h2>Voc&ecirc; sabia que...</h2>
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
    <script src="<?php echo RUTA_JS?>index_pt.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
    	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        	$('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
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
				$('#infraestructura').text("<?php echo $Infraestructura ?>");
			}
		});
    </script>
</body>
</html>