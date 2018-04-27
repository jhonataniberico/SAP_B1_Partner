<?php

class M_solicitud extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function insertarDatos($arrayInsert, $tabla){
        $this->db->insert($tabla, $arrayInsert);
        $sol = $this->db->insert_id();
        if($this->db->affected_rows() != 1) {
            throw new Exception('Error al insertar');
            $data['error'] = EXIT_ERROR;
        }
        return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "Id" => $sol);
    }
    function updateDatos($arrayData, $id, $tabla){
        $this->db->where('Id'  , $id);
        $this->db->update($tabla, $arrayData);
        if ($this->db->trans_status() == false) {
            throw new Exception('No se pudo actualizar los datos');
        }
        return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }
    function getDatosSolicitud($id) {
        $sql = "SELECT *
                  FROM solicitud
                 WHERE Id = ?";
        $result = $this->db->query($sql, array($id));
        return $result->result();
    }
    function getDatosPais($Nombre) {
    	$sql = "SELECT Id_lenguaje
                  FROM lenguaje
                 WHERE Nombre LIKE ?";
        $result = $this->db->query($sql, array($Nombre));
        return $result->row()->Id_lenguaje;
    }
    function getDatosUsuario($Id_usuario) {
        $sql = "SELECT *
                  FROM usuario
                 WHERE Id_persona = ?";
        $result = $this->db->query($sql, array($Id_usuario));
        return $result->result();
    }
    function getRespUsuario($id_persona) {
        $sql = "SELECT s.* 
                  FROM usuario u,
                       solicitud s
                WHERE s.Id = u.Id_solicitud
                 AND u.Id_persona = ?;";
        $result = $this->db->query($sql, array($id_persona));
        return $result->result();
    }
    function updateDatosLogo($arrayData, $id, $tabla){
        $this->db->where('Id_lenguaje'  , $id);
        $this->db->update($tabla, $arrayData);
        if ($this->db->trans_status() == false) {
            throw new Exception('No se pudo actualizar los datos');
        }
        return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }
    function getDatosLenguaje($pais){
        $sql = "SELECT *
                  FROM lenguaje
                 WHERE Nombre LIKE ?";
        $result = $this->db->query($sql, array($pais));
        return $result->result();
    }
    function getIdCliente($cliente){
      $sql = "SELECT c.Id
                FROM clientes c
               WHERE (c.Nombre LIKE '%".$cliente."%')";
      $result = $this->db->query($sql);
      return $result->row()->Id;
    }
}