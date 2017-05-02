<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	

	public function listar() {
		$this->db->from('ingreso');
		$query = $this->db->get();   // base de datos 
		return $query->result_array(); // es una matriz, trae columnas y filas de la información 
	}

	
	// Función para realizar busqueda del Usuario en la BD
	public function IngresoPersonal($usuario) {
		$this->db->from('ingreso');
		$this->db->like('usuario', $usuario);
		$query = $this->db->get();
		return $query->result_array();
	}

	}	
