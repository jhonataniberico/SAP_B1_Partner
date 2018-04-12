<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_solicitud');
        $this->load->model('M_reportes');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }
	public function index(){
		$this->load->view('v_configuracion', $data);
	}
    function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $this->session->unset_userdata('Id_user');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
    function cargarFact(){
        $respuesta = new stdClass();
        $respuesta->mensaje = "";
        if(count($_FILES) == 0){
            $respuesta->mensaje = 'Seleccione un logo';
        }else {
            $tipo = $_FILES['archivo']['type']; 
            $tamanio = $_FILES['archivo']['size']; 
            $archivotmp = $_FILES['archivo']['tmp_name'];
            print_r($archivotmp);
            $namearch = $_FILES['archivo']['name'];
            $nuevo = explode(".",$namearch);
            if($tamanio > '2000000'){
                $respuesta->mensaje = 'El tamaño de su imagen debe ser menor';
            }else {
                if($nuevo[1] == 'jpeg' || $nuevo[1] == 'jpg' || $nuevo[1] == 'png'){
                    $target = getcwd().DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'logo'.DIRECTORY_SEPARATOR.'google.png';
                    if(move_uploaded_file($archivotmp, $target) ){
                       $arrUpdt = array('logo' => $namearch);
                       if($this->session->userdata('Idioma') == 'Francés'){
                        $this->M_solicitud->updateDatosLogo($arrUpdt, 4, 'lenguaje');
                       }else if($this->session->userdata('Idioma') == 'Sueco'){
                        $this->M_solicitud->updateDatosLogo($arrUpdt, 5, 'lenguaje');
                       }
                       $respuesta->mensaje = 'Su logo se subió correctamente';
                    } else {
                       $respuesta->mensaje = 'Hubo un problema en la subida de imagen';
                    }
                }else {
                    $respuesta->mensaje = 'El formato de el logo es incorrecto';
                }
            }
            echo json_encode($respuesta);
        }
    }
    function subirEslogan(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $eslogan = $this->input->post('eslogan');
            $arrUpdt = array('eslogan' => $eslogan);
            if($this->session->userdata('Idioma') == 'Francés'){
                $this->M_solicitud->updateDatosLogo($arrUpdt, 4, 'lenguaje');
            }else if($this->session->userdata('Idioma') == 'Sueco'){
                $this->M_solicitud->updateDatosLogo($arrUpdt, 5, 'lenguaje');
            }
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}
