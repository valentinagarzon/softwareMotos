<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($moneda) {
		return $this->db->insert('registro_clientes', $moneda);
	}

	public function actualizar($moneda, $id) {
		return $this->db->update('registro_clientes', $moneda, compact('id'));
	}

	public function eliminar($id) {
		$this->db->where(compact('id'));
		return $this->db->delete('registro_clientes');
	}

	public function listar() {
		$this->db->from('registro_clientes');
		$query = $this->db->get();   // base de datos 
		return $query->result_array(); // es una matriz, trae columnas y filas de la información 
	}

	public function listar_filtro($nombre) {
		$this->db->from('registro_clientes');
		$this->db->like('nombre', $nombre);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function consultar($id) {
		$this->db->from('registro_clientes');
		$this->db->where(compact('id'));
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function obtenerNombre($id) {
		$this->db->from('registro_clientes');
		$this->db->where(compact('id'));
		$query = $this->db->get();
		$res=$query->row_array();
		return $res['nombre'];
	}

	public function existe($id) {
		$this->db->from('registro_clientes');
		$this->db->where(compact('id'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
}	
