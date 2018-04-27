<?php
class M_reportes extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getDatosTabla($id_cliente){
        $sql = "SELECT s.*,
					   u.nombre_completo,
				       u.Empresa,
				       u.Email,
				       u.Telefono,
               u.Contactado,
               u.Pais,
               COALESCE(DATE_FORMAT(u.fecha_sol, '%d/%m/%Y %H:%i %p'), '00/00/0000 00:00') AS fecha_sol,
               u.Cargo,
               u.Relacion
				  FROM usuario u,
				  	   solicitud s
				 WHERE u.Id_solicitud = s.Id
           AND u.id_cliente = ?";
        $result = $this->db->query($sql, array($id_cliente));
        return $result->result();
    }

    function getDatosTablaIdioma($idioma, $id_cliente){
      $sql = "SELECT s.*,
                     u.nombre_completo,
                     u.Empresa,
                     u.Email,
                     u.Telefono,
                     u.Contactado,
                     u.Pais,
                     COALESCE(DATE_FORMAT(u.fecha_sol, '%d/%m/%Y %H:%i %p'), '00/00/0000 00:00') AS fecha_sol,
                     u.Cargo,
                     u.Relacion
                FROM usuario u,
                     solicitud s
               WHERE u.Id_solicitud = s.Id
                 AND s.Id_lenguaje = ?
                 AND u.id_cliente = ?";
        $result = $this->db->query($sql, array($idioma, $id_cliente));
        return $result->result();
    }
}