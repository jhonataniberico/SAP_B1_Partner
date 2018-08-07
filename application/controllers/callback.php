<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class callback extends CI_Controller {
    
    function __construct() {
        parent::__construct();
		$this->load->library('session');
    }

    public function index() {
    	require_once "init.php";
		$user = getCallback();
		$_SESSION['user'] 	  			= $user;
		$data['firstName'] 	  			= $user->firstName;
		$data['lastName'] 	  			= $user->lastName;
		$data['emailAddress'] 			= $user->emailAddress;
		$data['company'] 	  			= isset($user->positions->values) == true ? $user->positions->values[0]->company->name : null;
		$data['title'] 	  	  			= isset($user->positions->values) == true ? $user->positions->values[0]->title : null;
		$data['location'] 	  			= $user->location->name;
		$session = array('nombre_linke' => $user->firstName.' '.$user->lastName,
		        	 	 'email_linke'  => $user->emailAddress,
				 		 'compania'  	=> isset($user->positions->values) == true ? $user->positions->values[0]->company->name : null,
						 'titulo'    	=> isset($user->positions->values) == true ? $user->positions->values[0]->title : null,
				 		 'pais_linke' 	=> $user->location->name,
				 		 'pantalla'     => 5);
		$this->session->set_userdata($session);
		if($_SESSION['partner'] == 'partner'){
			header("location: es");
			/*if($_SESSION['idioma'] == 'Español') {
				header("location: es");
			}else if($_SESSION['idioma'] == 'Francés') {
				header("location: fr");
			}else if($_SESSION['idioma'] == 'Portugués') {
				header("location: pt");
			}else if($_SESSION['idioma'] == 'Finlandés') {
				header("location: fi");
			}*/
		}
		if($_SESSION['partner'] == 'Seidor'){
			if($_SESSION['idioma'] == 'Español') {
				header("location: es?a=VHUgbmVnb2NpbyBlbiBtYW5vcyBkZSBleHBlcnRvcw%3D%3D&logo=seidor&correo=amhvbmF0YW5pYmVyaWNvbUBnbWFpbC5jb20%3D&partner=U2VpZG9y&utm_source=SAP%20Business%20one%20Partner&utm_medium=Banner&utm_campaign=sap_business_one&utm_term=Registro&utm_content=CRM-XL18-GIC-B1CONFIB1S");
			}
		}
		if($_SESSION['partner'] == 'AGASYS'){
			if($_SESSION['idioma'] == 'Español') {
				header("location: es?a=RXZvbHVjaW9uYW5kbyBsYSBlZmljaWVuY2lhIGVuIGVsIG11bmRv%3D%3D&logo=logo-agasys&correo=YWZsb3Jlc0BhZ2FzeXMubXg%3D&partner=QUdBU1lT&utm_source=SAP%20Business%20one%20Partner&utm_medium=Banner&utm_campaign=sap_business_one&utm_term=Registro&utm_content=CRM-XL18-GIC-B1CONFIAGA");
			}
		}
		if($_SESSION['partner'] == 'ACTUALISAP CONSULTORES BOLIVIA'){
			if($_SESSION['idioma'] == 'Español') {
				header("location: es?a=VHUgbmVnb2NpbyBlbiBtYW5vcyBkZSBleHBlcnRvcw%3D%3D&logo=logo_actualisap&correo=YXNhbmppbmVzQGFjdHVhbGlzYXBib2xpdmlhLmNvbQ%3D%3D&partner=QUNUVUFMSVNBUCBDT05TVUxUT1JFUyBCT0xJVklB&utm_source=SAP%20Business%20one%20Partner&utm_medium=Banner&utm_campaign=sap_business_one&utm_term=Registro&utm_content=CRM-XL18-GIC-B1CONFIACT");
			}
		}
		if($_SESSION['partner'] == 'CORPONET'){
			if($_SESSION['idioma'] == 'Español') {
				header("location: es?a=MTQgYcOxb3MgYXl1ZGFuZG8gYSBsYXMgUFlNRVMgYSBwZW5zYXIgZW4gR1JBTkRF&logo=logotipo_Corponet&correo=SWxpYW5hLmFyYW5kYUBjb3Jwb25ldC5jb20ubXg=&partner=Q09SUE9ORVQ=");
			}
		}
		if($_SESSION['partner'] == 'AJAM'){
			if($_SESSION['idioma'] == 'Español') {
				header("location: es?a=bGliZXJhIHR1IHBvdGVuY2lhIGNvbiBlbCBzaXN0ZW1hIHF1ZSBjcmVjZSBjb250aWdv&logo=ijam&correo=bWFpbHRvOmNvbnRhY3RvQGlqYW0uY29tLm14&partner=SUpBTQ==");
			}
		}/*else {
			if($_SESSION['idioma'] == 'Español') {
				header("location: es?a=VHUgbmVnb2NpbyBlbiBtYW5vcyBkZSBleHBlcnRvcw==&logo=logo_actualisap&correo=YXNhbmppbmVzQGFjdHVhbGlzYXBib2xpdmlhLmNvbQ==&partner=QUNUVUFMSVNBUCBDT05TVUxUT1JFUyBCT0xJVklB");
			}else if($_SESSION['idioma'] == 'Francés') {
				header("location: fr");
			}else if($_SESSION['idioma'] == 'Portugués') {
				header("location: pt?a=U2ltcGxpZmljYW5kbyBhIHZpZGEgZG9zIG5vc3NvcyBjbGllbnRlcywgdG9ybmFuZG8gb3MgcHJvY2Vzc29zIG1haXMgw6FnZWlzIGUgZWZpY2llbnRlcy4=&logo=partner&correo=cmFmYWVsYS5zYW50b3NAb2tzZXIuY29tLmJy==&partner=QUNUVUFMSVNBUCBDT05TVUxUT1JFUyBCT0xJVklB");
			}else if($_SESSION['idioma'] == 'Finlandés') {
				header("location: fi");
			}
		}*/
    } 
}