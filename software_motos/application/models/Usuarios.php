<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($moneda) {
		return $this->db->insert('ingreso', $moneda);
	}

	public function actualizar($moneda, $id) {
		return $this->db->update('ingreso', $moneda, compact('id'));
	}

	public function eliminar($id) {
		$this->db->where(compact('id'));
		return $this->db->delete('ingreso');
	}

	public function listar() {
		$this->db->from('ingreso');
		$query = $this->db->get();   // base de datos 
		return $query->result_array(); // es una matriz, trae columnas y filas de la información 
	}

	public function listar_filtro($usuario) {
		$this->db->from('ingreso');
		$this->db->like('usuario', $usuario);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function consultar($id) {
		$this->db->from('ingreso');
		$this->db->where(compact('id'));
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function obtenerNombre($id) {
		$this->db->from('ingreso');
		$this->db->where(compact('id'));
		$query = $this->db->get();
		$res=$query->row_array();
		return $res['usuario'];
	}

	public function existe($id) {
		$this->db->from('ingreso');
		$this->db->where(compact('id'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
}	
