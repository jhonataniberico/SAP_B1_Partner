function solicitarEstimacion(){
	var nombre_completo = $('#nombre_completo').val(); 
	var empresa  		= $('#empresa').val();
	var email 	 		= $('#email').val();
	var pais 	 		= $('#pais').val();
	var cargo 	 		= $('#cargo').val();
	var telefono 		= $('#telefono').val();
	var relacion		= $('#relacion').val();
	var c_email    		= $('#c-email').is(':checked');
	var c_telefono    	= $('#c-telefono').is(':checked');
	var c_ambos    		= $('#c-ambos').is(':checked');
	var terminos		= $('#checkbox-1').is(':checked');
	var term_cond		= null;
	var contacto		= null;
	if(nombre_completo == '' && empresa == '' && email == '' && pais == '' && cargo == '' && telefono == '' && c_email == false && terminos == false){
		validarCampos();
	}
	if(nombre_completo == null || nombre_completo == ''){
		msj('error', 'Renseigner votre nom complet');
		return;
	}
	if(empresa == null || empresa == ''){
		msj('error', 'Renseigner votre société');
		return;
	}
	if(email == null || email == ''){
		msj('error', 'Renseigner votre e-mail');
		return;
	}
	if (!validateEmail(email)){
		$('#email').css('border-color','red');
		return;
	}
	if(pais == null || pais == ''){
		msj('error', 'Renseigner votre pays');
		return;
	}
	if(cargo == null || cargo == ''){
		msj('error', 'Renseigner votre position');
		return;
	}
	if(telefono == null || telefono == ''){
		msj('error', 'Renseigner votre téléphone');
		return;
	}
	if(relacion == null || relacion == ''){
		msj('error', 'Sélectionner votre relation avec SAP');
		return;
	}
	if(c_email == true){
		contacto = 1;
	}else if(c_telefono == true){
		contacto = 2;
	}else if(c_ambos == true){
		contacto = 3;
	}
	if(contacto == null || contacto == ''){
		msj('error', 'Sélectionner le moyen avec lequel vous souhaitez être contacté');
		  return;
	}
	if(terminos == true){
		term_cond = 1
	}else{
		term_cond = 0;
	}
	if(terminos == false){
		msj('error', 'Accepter les termes et conditions');
		return;
	}
	$('.button-confirmar').prop("disabled", true);
	$.ajax({
		data : {nombre_completo : nombre_completo,
				empresa 	    : empresa,
				email 		  	: email,
				pais 			: pais,
				cargo 		 	: cargo,
				telefono 		: telefono,
				relacion 		: relacion,
				contacto 		: contacto,
				term_cond       : term_cond},
		url  : 'fr/solicitarEstimacion',
		type : 'POST'
	}).done(function(data){
		try{
        	data = JSON.parse(data);
        	if(data.error == 0){
				if(confirmar == 1){
					limpiarCampos();
					enviarGracias();
				}
        	}else{
        		return;
        	}
      } catch (err){
        msj('error',err.message);
      }
	});
}
function soloLetras(e){
    key 	   	  = e.keyCode || e.which;
    tecla 	   	  = String.fromCharCode(key).toLowerCase();
    letras     	  = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales 	  = "8-37-39-46";
    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }
     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
 }
 function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron 		=/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function validateEmail(email){
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
//DETECT DEVICE FOR MOBILE
var isMobile = {
    Android: function(){
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function(){
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function(){
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function(){
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function(){
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function(){
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
var global_datos = null;
var datos_array  = [];
var array_3pant  = [];
function guardarDatos(id,datos){
	var buttonSelect = $('#'+id+'.select-one');
	var buttonToggle = $('#'+id+'.select-prioridad');
	var cardSelect   = $('#'+id+'.select-one').parent().find('.contenido');
	var cardToggle   = $('#'+id+'.select-prioridad').parent().find('.contenido');
	var modal    	 = $('#ModalQuestion');
	global_datos 	 = datos;
	$('.contenido').removeClass('aparecer');
	$('.content-card').find('.select-one').removeClass('button-select');
	buttonSelect.addClass('button-select');
	cardSelect.addClass('aparecer');
	buttonToggle.toggleClass("button-select");
    buttonToggle.click(function(){
    	cardToggle.toggleClass("aparecer");
    	if(window.matchMedia("(max-width: 1200px)").matches){
	    	var img_toggle     = cardToggle.find('.contenido-left').find('img');
	    	var content_toggle = cardToggle.find('.contenido-right').find('p');
	    	var small_toggle   = cardToggle.find('.contenido-right').find('small');
	    	modal.find('.mdl-card__title').find('img').attr({
		        "alt" : img_toggle.attr('alt'),
		        "src" : img_toggle.attr('src')
		    });
		    modal.find('.mdl-card__supporting-text').find('p').text(content_toggle[0].innerText);
		    modal.find('.mdl-card__supporting-text').find('small').text(small_toggle[0].innerText);
		    if(buttonToggle.hasClass('button-select')){
		    	modal.modal('show');
		    	buttonToggle.css("background-color","#F8B22C");
		    }else{
		    	modal.modal('hide');
		    	buttonToggle.css("background-color","transparent");
		    }
			
		}
	});
	buttonSelect.click(function(){
		if (window.matchMedia("(max-width: 1200px)").matches){
			var img     = cardSelect.find('.contenido-left').find('img');
		    var content = cardSelect.find('.contenido-right').find('p');
		    var small   = cardSelect.find('.contenido-right').find('small');
		    modal.find('.mdl-card__title').find('img').attr({
		        "alt" : img.attr('alt'),
		        "src" : img.attr('src')
		    });
		    modal.find('.mdl-card__supporting-text').find('p').text(content[0].innerText);
		    modal.find('.mdl-card__supporting-text').find('small').text(small[0].innerText);
			modal.modal('show');
		}
	});
}
function saveDatos(pantalla){
	var idioma = $('#Idioma').val();
	var operar = null;
	if(pantalla == 2){
		operar = $('#textOperar').text();
	}
	if(pantalla == 3){
		$(".select-prioridad.button-select").each(function(){
		  var id = $( this ).attr('id');
		  array_3pant.push(id);
		  var dato_card = $('#'+id).parents('.mdl-card-question').find('.card-front p').text();
		  if($( this ).attr('id') != undefined){
		  	datos_array.push(dato_card);
		  }
		});
	}
	$.ajax({
		data : {global_datos : global_datos,
				pantalla     : pantalla,
				idioma 	     : idioma,
				datos_prio   : datos_array.toString(),
				operar       : operar,
				facturacion  : facturacion},
		url  : 'fr/Savedatos',
		type : 'POST'
	}).done(function(data){
		try{
			if(pantalla == 4){
				mostrarDatos();
			}
		} catch (err){
			msj('error',err.message);
		}
	});
}
var array_ids 			   = new Array();
var select 				   = 0;
var select_prioridad 	   = 0;
var select_infraestructura = 0;
var select_tam 			   = 0;
var select_empl 	       = 0;
$( document ).ready(function(){
	var array_button = new Array();
    $(".select").click(function(){
		select = 1;
		$('.button-next').prop("disabled", false);
	});
	$("#buttonMas").click(function(){
		select_tam  = 1;
		facturacion = $('#facturacion').val();
		if(facturacion != null){
			$('.button-next').prop("disabled", false);
		}
		pant2 = 1;
	});
	$(".select-prioridad").click(function(){
		select_prioridad = 1;
		var id_button    = $('.mdl-card-question .content-card').find('.select-prioridad.button-select').attr('id');
		array_button.push(id_button);
		if(array_button.length > 0){
			array_button.splice(0, 1, id_button);
		}
		if($('#'+array_button[0]).hasClass('button-select') == true){
			$('.button-next').prop("disabled", false);
		}else{
			$('.button-next').prop("disabled", true);
		}
		pant3 = 1;
	});
	$(".select-infraestructura").click(function(){
		select_infraestructura = 1;
		$('.button-next').prop("disabled", false);
		pant4 = 1;
	});
});
function mostrarDatos(){
	$.ajax({
		data : {array_ids   : array_ids,
				array_3pant : array_3pant},
		url  : 'fr/mostrarDatos',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	$("#relacion").val('0');
			$('.selectpicker').selectpicker('refresh');
          	$('#industria').text(data.Industria);
          	$('#factura').text(data.Factura_anual)
           	$('#tamanio').text(data.Tamanio);
           	$('#prioridad').find('li').remove();
           	$('#prioridad').append(data.Prioridad);
           	$('#infraestructura').text(data.Infraestructura);
        }else{
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
var i = 1;
function operar(id,tipo){
	var buttonSelect = $('#'+id+'.select-one');
	var cardSelec    = $('#'+id+'.select-one').parents('.content-card').find('.contenido');
	var divIncrement = $('#'+id+'.select-one').parent();
	var cardHidden   = $('.mdl-card-question.visi-hidden');
	var modal        = $('#ModalQuestion');
	if(tipo == 2){
		i++;
		if(i == 2){
			$('#textOperar').text('1 - 50');
			divIncrement.addClass('select-increment');
			cardSelec.addClass('aparecer');
			cardHidden.fadeIn(400);
			$("#facturacion").val('0');
			$('.selectpicker').selectpicker('refresh');
			if (window.matchMedia("(max-width: 1200px)").matches){
			    var card    = buttonSelect.closest('.mdl-card-question');
			    var img     = card.find('.contenido-left').find('img');
			    var content = card.find('.contenido-right').find('p');
			    var small   = card.find('.contenido-right').find('small');
			    modal.find('.mdl-card__title').find('img').attr({
			        "alt" : img.attr('alt'),
			        "src" : img.attr('src')
			    });
			    modal.find('.mdl-card__supporting-text').find('p').text(content[0].innerText);
			    modal.find('.mdl-card__supporting-text').find('small').text(small[0].innerText);
				modal.modal('show');
			}
		}else if(i == 3){
			$('#textOperar').text('50 - 100');
		}else if(i == 4){
			$('#textOperar').text('100 - 500');
		}else if(i == 5){
			$('#textOperar').text('500 - 1000');
		}else if(i == 6){
			$('#textOperar').text('1000 - 2500');
		}else if(i == 7){
			$('#textOperar').text('2500 - 5000');
		}else if(i == 8){
			$('#textOperar').text('5000 +');
		}else if(i > 8){
			i = 8;
			return;
		}
	}else if(tipo == 1){
		i--;
		if(i == 7){
			$('#textOperar').text('2500 - 5000');
		}else if(i == 6){
			$('#textOperar').text('1000 - 2500');
		}else if(i == 5){
			$('#textOperar').text('500 - 1000');
		}else if(i == 4){
			$('#textOperar').text('100 - 500');
		}else if(i == 3){
			$('#textOperar').text('50 - 100');
		}else if(i == 2){
			$('#textOperar').text('1 - 50');
		}else if(i == 1){
			$('#textOperar').text('Seleccione');
			divIncrement.removeClass('select-increment');
			$('.mdl-tablet').find('.mdl-select').removeClass('select-increment');
			cardSelec.removeClass('aparecer');
			$('.contenido').removeClass('aparecer');
			cardHidden.fadeOut(400);
			$("#facturacion").val('0');
			$('.selectpicker').selectpicker('refresh');
			return;
		}else if(i < 1){
			i = 1;
			return;
		}
	}
}
var facturacion = null;
function selectFacturacion(id){
	facturacion = $('#facturacion').val();
	if($('#textOperar') != 'Seleccione' && facturacion != null){
		$('.button-next').prop("disabled", false);
	}
	$('.contenido').removeClass('aparecer');
	$('.mdl-tablet').find('.mdl-select').addClass('select-increment');
	var selectButton = $('#'+id).parents('.mdl-select .btn-group').find('button');
	var Select       = $('#'+id).parents('.mdl-card-question').find('.contenido');
	var modal        = $('#ModalQuestion');
	Select.addClass('aparecer');
	if (window.matchMedia("(max-width: 1200px)").matches){
	    var img     = Select.find('.contenido-left').find('img');
	    var content = Select.find('.contenido-right').find('p');
	    var small   = Select.find('.contenido-right').find('small');
	    modal.find('.mdl-card__title').find('img').attr({
	        "alt" : img.attr('alt'),
	        "src" : img.attr('src')
	    });
	    modal.find('.mdl-card__supporting-text').find('p').text(content[0].innerText);
	    modal.find('.mdl-card__supporting-text').find('small').text(small[0].innerText);
		modal.modal('show');
	}
	selectButton.click(function(){
		Select.removeClass('aparecer');
	})
}
function validarCampos(){
	var $inputs    = $('form :input');
	var formvalido = true;
	$inputs.each(function(){
		if(isEmpty($(this).val())){
			$(this).css('border-color','red');
			formvalido = false;
		}else{
			$(this).css('border-color','');
		}
	});
	return formvalido;
}
function isEmpty(val){
	if(jQuery.trim(val).length != 0)
    	return false;
		return true;
}
var confirmar = 0;	
function ConfirmarRespuestas(){
	confirmar = 1;
	$('.button-arrow.button-prev').css("display","none");
	$('.mdl-card-confirmacion').addClass('confirmar');
	$('.fp-controlArrow.fp-prev').css("display","none");
	$('.mdl-formulario').removeClass('disabled');
	$.ajax({
		data : {confirmar : confirmar},
		url  : 'fr/ConfirmarRespuestas',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
function limpiarCampos(){
	var nombre_completo = $('#nombre_completo').val("");
	var empresa  		= $('#empresa').val("");
	var email 	 		= $('#email').val("");
	var pais 	 		= $('#pais').val("");
	var cargo 	 		= $('#cargo').val("");
	var telefono 		= $('#telefono').val("");
	var relacion		= $('#relacion').val("0");
	$('.selectpicker').selectpicker('refresh');
	var c_email    		= $('#c-email').is(':checked');
	var c_telefono    	= $('#c-telefono').is(':checked');
	var c_ambos    		= $('#c-ambos').is(':checked');
	var terminos		= $('#checkbox-1').is(':checked');
	if(c_email == true){
		$('#c-email').parent().removeClass('is-checked');
	}else if(c_telefono == true){
		$('#c-telefono').parent().removeClass('is-checked');
	}else if(c_ambos == true){
		$('#c-ambos').parent().removeClass('is-checked');
	}
}
function enviarGracias(){
	$('#window5-page').addClass('display-flex');
	$('.mdl-solicitud').addClass('animated fadeOutLeft');
	$('.mdl-agradecimiento').addClass('animated fadeInRight');
	$('.button-arrow').css("display","none");
	$('.question').css("display","none");
	setTimeout(function(){ 
		location.reload();
	}, 4000);
}
/*BUTTONS NEXT - PREV */
var m 			  = 1;
var id_primero 	  = "";
var homePage      = $('#home');
var header        = $('.header');
var footerLogo    = $('.logo-bottom');
var firstWindow   = $('#window1-page');
var secondWindow  = $('#window2-page');
var thirdWindow   = $('#window3-page');
var fourthWindow  = $('#window4-page');
var fifthWindow   = $('#window5-page');
function buttonNext(){
	if(pant1 == 0){
		$('.button-next').prop("disabled", true);
	}
	$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
	homePage.addClass('animated fadeOutLeft');
	firstWindow.addClass('animated fadeInRight');
	$('.button-arrow').css("display","block");
	$('.chat').css("display","block")
	$('#'+id_primero).addClass('button-select');
	header.addClass('opacity');
	footerLogo.addClass('opacity');
}
var pant1 = 0;
var pant2 = 0;
var pant3 = 0;
var pant4 = 0;
function buttonQuestion(direction){
	if(direction == 2){
		m++;
		if(m == 2){
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			firstWindow.addClass('animated fadeOutLeft');
			secondWindow.addClass('animated fadeInRight');
			var id_button = $('.mdl-card-question .content-card').find('.select.select-one.button-select').attr('id');
			id_primero 	  = id_button;
    		array_ids.push(id_button);
    		saveDatos(1);
    		if(array_ids.length != 0){
				array_ids.splice(0, 1, id_button);
				var id = array_ids[1];
				$('#'+id).addClass('button-select');
			}
			if(select != 1){
				$('.button-next').prop("disabled", true);
			}
			pant1 = 1;
			if(pant2 == 0 || facturacion == null && $('#textOperar').text() == 'Seleccione'){
				$('.button-next').prop("disabled", true);
			}
		}
		else if(m == 3){
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			secondWindow.addClass('animated fadeOutLeft');
			thirdWindow.addClass('animated fadeInRight');
			$('.bottom-right').css("display","block");
			var id_button = $('#textOperar').text();
			array_ids.push(id_button);
			saveDatos(2);
    		if(array_ids.length != 0){
				array_ids.splice(1, 1, id_button);
			}
			var id = array_ids[2];
			$('#'+id).addClass('button-select');
			if(pant3 == 0){
				$('.button-next').prop("disabled", true);
			}
		}
		else if(m == 4){
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			thirdWindow.addClass('animated fadeOutLeft');
			$('.bottom-right').css("display","none");
			fourthWindow.addClass('animated fadeInRight');
			var id_button = $('#facturacion').val();
    		array_ids.push(id_button);
    		saveDatos(3);
    		if(array_ids.length != 0){
				array_ids.splice(2, 1, id_button);
				var id = array_ids[3];
				$('#'+id).addClass('button-select');
			}
			if(pant4 == 0){
				$('.button-next').prop("disabled", true);
			}
		}
		else if(m == 5){
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			fourthWindow.addClass('animated fadeOutLeft');
			fifthWindow.addClass('animated fadeInRight');
			$('.button-arrow.button-next').css("display","none");
			$('.chat').css("display","none");
			var id_button = $('.mdl-card-question .content-card').find('.select-infraestructura.select-one.button-select').attr('id');
    		array_ids.push(id_button);
    		saveDatos(4);
    		if(array_ids.length != 0){
				array_ids.splice(3, 1, id_button);
			}
			m = 5;
			return;
		}
	}
	else if(direction == 1){
		m--;
		if(m == 4){
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			fourthWindow.addClass('animated fadeInLeft');
			fifthWindow.addClass('animated fadeOutRight');
			$('.button-arrow.button-next').css("display","block");
			$('.chat').css("display","block");
			if(data_ids_arr == 5){
				$('#'+global_array[3]).addClass('button-select');
			}
		}
		else if(m == 3){
			datos_array = [];
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			thirdWindow.addClass('animated fadeInLeft');
			$('.bottom-right').css("display","block");
			fourthWindow.addClass('animated fadeOutRight');
			if(pant3 == 1){
				$('.button-next').prop("disabled", false);
			}
			if(data_ids_arr == 5){
				$.each(global_terce, function(index, value ){
				  $('#'+value).addClass('button-select');
				});
			}
		}
		else if(m == 2){
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			secondWindow.addClass('animated fadeInLeft');
			thirdWindow.addClass('animated fadeOutRight');
			$('.bottom-right').css("display","none");
			$('#'+id_primero).addClass('button-select');
			if(facturacion != null && $('#textOperar').text() != 'Seleccione'){
				$('.button-next').prop("disabled", false);
			}
			if(data_ids_arr == 5){
				$("#textOperar").text(global_array[1]);
	           	var divIncrement = $('#buttonMas.select-one').parent();
	           	var cardSelec    = $('#buttonMas.select-one').parents('.content-card').find('.contenido');
	           	var cardHidden   = $('.mdl-card-question.visi-hidden');
	           	divIncrement.addClass('select-increment');
				cardSelec.addClass('aparecer');
				cardHidden.fadeIn(400);
				$("#facturacion").val(global_array[2]);
				$("#facturacion").parent().addClass('button-select');
				var divIncrement2 = $('#facturacion').parents().find('.mdl-select');
				divIncrement2.addClass('select-increment');
			}
		}
		else if(m == 1){
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			firstWindow.addClass('animated fadeInLeft');
			secondWindow.addClass('animated fadeOutRight');
			if(pant1 == 1){
				$('.button-next').prop("disabled", false);
			}
			if(data_ids_arr == 5){
				$('#'+global_array[0]).addClass('button-select');
			}
		}
		else if(m < 1){
			$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			homePage.removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
			homePage.addClass('animated fadeInLeft');
			firstWindow.addClass('animated fadeOutRight');
			header.removeClass('opacity');
			footerLogo.removeClass('opacity');
			$('.button-arrow').css("display","none");
			$('.chat').css("display","none");
			homePage.find('.button-next').css("display","block");
			if(pant1 == 1){
				$('.button-next').prop("disabled", false);
			}else{
				$('.button-next').prop("disabled", false);
			}
			m = 1;
			return;
		}
	}
}
/*EDIT QUESTION*/
var num = null;
var data_ids_arr = null;
var global_array = [];
var global_terce = [];
function EditQuestion(id, pant){
	if(pant == 1){
		datos_array = [];
		array_ids   = [];
		pant1 = 1;
		pant2 = 1;
	}
	if(pant == 2){
		datos_array = [];
		pant3 		= 1;
	}
	if(pant == 3){
		datos_array = [];
		array_3pant = [];
		pant4 		= 1;
	}
	num = id.substr(6,1);
	m = num;
	var windowQestion = $('#'+id+'-page');
	$('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
	windowQestion.addClass('animated fadeInLeft');
	$('.button-arrow.button-next').css("display","block");
	$.ajax({
		url  : 'fr/EditQuestion',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        	data_ids_arr = data.pantalla_sess;
           	$('#'+data.ids_array[0]).addClass('button-select');
           	$("#textOperar").text(data.ids_array[1]);
           	var divIncrement = $('#buttonMas.select-one').parent();
           	var cardSelec    = $('#buttonMas.select-one').parents('.content-card').find('.contenido');
           	var cardHidden   = $('.mdl-card-question.visi-hidden');
           	divIncrement.addClass('select-increment');
			cardSelec.addClass('aparecer');
			cardHidden.fadeIn(400);
			$("#facturacion").val(data.ids_array[2]);
			$("#facturacion").parent().addClass('button-select');
			var divIncrement2 = $('#facturacion').parents().find('.mdl-select');
			divIncrement2.addClass('select-increment');
			$.each(data.array_3pant, function(index, value ){
			  $('#'+value).addClass('button-select');
			});
			$('.selectpicker').selectpicker('refresh');
			$('#'+data.ids_array[3]).addClass('button-select');
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
function closeModal(){
	$('#ModalQuestion').modal('hide');
}
$(document).ready(function(){
	resizeContent();
    $(window).resize(function(){
        resizeContent();
    });
});
function resizeContent(){
   var top = $( window ).height();
   $("#home").css('height', top);
}
function returnHome(){
	global_datos = null;
	location.href = 'fr';
}
function cambiarIdioma(){
	var idioma = $('#Idioma').val();
	if(idioma == 'Español'){
		location.href = 'Es';
	}else if(idioma == 'Inglés'){
		location.href = 'En';
	}else if(idioma == 'Portugués'){
		location.href = 'Pt';
	}
	$.ajax({
		data  : {idioma : idioma},
		url   : 'fr/cambiarIdioma',
		type  : 'POST'
	}).done(function(data){
	  try{
        data = JSON.parse(data);
        if(data.error == 0){
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}
function cambiarIdiomaHome(){
	var idioma = $('#IdiomaHome').val();
	if(idioma == 'Español'){
		location.href = 'Es';
	}else if(idioma == 'Inglés'){
		location.href = 'En';
	}else if(idioma == 'Portugués'){
		location.href = 'Pt';
	}
	$.ajax({
		data : {idioma : idioma},
		url  : 'fr/cambiarIdioma',
		type : 'POST'
	}).done(function(data){
		try{
        data = JSON.parse(data);
        if(data.error == 0){
        }else{
        	return;
        }
      } catch (err){
        msj('error',err.message);
      }
	});
}