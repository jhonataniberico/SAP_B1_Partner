<?php
class M_reportes extends  CI_Model{
    function __construct(){
        parent::__construct();
    }

    function getDatosTabla(){
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
				  WHERE u.Id_solicitud = s.Id";
        $result = $this->db->query($sql, array());
        return $result->result();
    }

    function getDatosTablaIdioma($idioma){
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
            AND s.Id_lenguaje = ?";
        $result = $this->db->query($sql, array($idioma));
        return $result->result();
    }
}