<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class callback extends CI_Controller {
    
    function __construct() {
        parent::__construct();
	$this->load->library('session');
    }

    public function index()
    {    
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
			if($_SESSION['idioma'] == 'Español') {
				header("location: es");
			}else if($_SESSION['idioma'] == 'Francés') {
				header("location: fr");
			}else if($_SESSION['idioma'] == 'Portugués') {
				header("location: pt");
			}else if($_SESSION['idioma'] == 'Finlandés') {
				header("location: fi");
			}
		}else if($_SESSION['partner'] == 'Seidor'){
			if($_SESSION['idioma'] == 'Español') {
				header("location: es?a=VHUgbmVnb2NpbyBlbiBtYW5vcyBkZSBleHBlcnRvcw==&logo=seidor&correo=amhvbmF0YW5pYmVyaWNvbUBnbWFpbC5jb20=&partner=U2VpZG9y");
			}
		}else {
			if($_SESSION['idioma'] == 'Español') {
				header("location: es?a=VHUgbmVnb2NpbyBlbiBtYW5vcyBkZSBleHBlcnRvcw==&logo=logo_actualisap&correo=YXNhbmppbmVzQGFjdHVhbGlzYXBib2xpdmlhLmNvbQ==&partner=QUNUVUFMSVNBUCBDT05TVUxUT1JFUyBCT0xJVklB");
			}else if($_SESSION['idioma'] == 'Francés') {
				header("location: fr");
			}else if($_SESSION['idioma'] == 'Portugués') {
				header("location: pt?a=U2ltcGxpZmljYW5kbyBhIHZpZGEgZG9zIG5vc3NvcyBjbGllbnRlcywgdG9ybmFuZG8gb3MgcHJvY2Vzc29zIG1haXMgw6FnZWlzIGUgZWZpY2llbnRlcy4=&logo=partner&correo=cmFmYWVsYS5zYW50b3NAb2tzZXIuY29tLmJy==&partner=QUNUVUFMSVNBUCBDT05TVUxUT1JFUyBCT0xJVklB");
			}else if($_SESSION['idioma'] == 'Finlandés') {
				header("location: fi");
			}
		}
    } 
}