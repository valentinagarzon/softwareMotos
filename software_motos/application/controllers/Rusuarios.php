<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rusuarios extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
    }

	public function index() {
		redirect('Rusuarios/home');
	}

	public function home() {		
		$this->load->view('admin/home', $data );
	}

	public function vista_usuarios() {
		$data['listIngreso'] = $this->Usuarios->listar(); //modelo
		$this->load->view('admin/vista_usuarios', $data ); // vista
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( ($this->input->post('usuario')  == ('')) || ( $this->input->post('clave') == ('')) )
		{
			redirect('index.php/Rusuarios/vista_usuarios');
		} else {
			$usuario = $this->input->post('usuario');
			$clave = $this->input->post('clave');
			if (! $this->input->post('idd')) {
				if(!$this->Usuarios->existe(0, $usuario, $clave)) {
					$dat = array('usuario' => $usuario, 'clave' => $clave);
					$this->Usuarios->insertar($dat);
				} else {
					//$this->session->set_userdata('msg', 'Equipo ya existe. Verifique datos');
				}
			} else {
				$idd = $this->input->post('idd');
				$dat = array('usuario' => $usuario, 'clave' => $clave);
				$this->Usuarios->actualizar($dat, $idd);
				//$this->session->set_userdata('msg', 'Equipo '. $nombre . '(' . $region . ') editado correctamente');
			}
			redirect('index.php/Rusuarios/vista_usuarios');
		}
	}

	/*public function agregar2() {
		if ( ! $this->input->post('descripcion'))
		{
			redirect('index.php/Rplanes/plan');
		} else {
			$descripcion = $this->input->post('descripcion');
						if (! $this->input->post('idd')) {
				if(!$this->Plan->existe(0, $descripcion)) {
					$dat = array('descripcion' => $descripcion);
					$this->Plan->insertar($dat);
				} else {
					//$this->session->set_userdata('msg', 'Equipo ya existe. Verifique datos');
				}
			} else {
				$idd = $this->input->post('idd');
				$dat = array('descripcion' => $descripcion);
				$this->Plan->actualizar($dat, $idd);
				//$this->session->set_userdata('msg', 'Equipo '. $nombre . '(' . $region . ') editado correctamente');
			}
			redirect('index.php/Rplanes/plan');
		}
	}*/

	public function listarFiltroUsuarios() {
		if ($this->input->post('key')) {
			$data = $this->Usuarios->listar_filtro($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['id'] . "::::" . $valor['usuario'] . "::::". $valor['clave'] ."----";
			}
			
		}
	}

	public function eliminar() {
		if ($this->input->post('key')) {
			$idd = $this->input->post('key');
			$this->Usuarios->eliminar($idd);
		}
	}
}
