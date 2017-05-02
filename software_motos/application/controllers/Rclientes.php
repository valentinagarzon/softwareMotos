<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rclientes extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
    }

	public function index() {
		redirect('Rclientes/home');
	}

	public function home() {		
		$this->load->view('admin/home', $data );
	}

	public function vista_clientes() {
		$data['listRegistro_clientes'] = $this->Clientes->listar(); //modelo
		$this->load->view('admin/vista_clientes', $data ); // vista
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( ( $this->input->post('nombre') == ('')) || ( $this->input->post('identificacion') == (''))  || ( $this->input->post('telefono') == (''))  || ( $this->input->post('direccion') == ('')))
		{
							redirect('index.php/Rclientes/vista_clientes');


		} else {
			$nombre = $this->input->post('nombre');
			$identificacion = $this->input->post('identificacion');
			$telefono = $this->input->post('telefono');
			$direccion = $this->input->post('direccion');
			if (! $this->input->post('idd')) {
				if(!$this->Clientes->existe(0, $nombre, $identificacion, $telefono, $direccion)) {
					$dat = array('nombre' => $nombre, 'identificacion' => $identificacion, 'telefono' => $telefono, 'direccion' => $direccion);
					$this->Clientes->insertar($dat);
				} else {
					//$this->session->set_userdata('msg', 'Equipo ya existe. Verifique datos');
				}
			} else {
				$idd = $this->input->post('idd');
				$dat = array('nombre' => $nombre, 'identificacion' => $identificacion, 'telefono' => $telefono, 'direccion' => $direccion);
				$this->Clientes->actualizar($dat, $idd);
				//$this->session->set_userdata('msg', 'Equipo '. $nombre . '(' . $region . ') editado correctamente');
			}
			redirect('index.php/Rclientes/vista_clientes');
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

	public function listarFiltroClientes() {
		if ($this->input->post('key')) {
			$data = $this->Clientes->listar_filtro($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['id'] . "::::" . $valor['nombre'] . "::::". $valor['identificacion'] . "::::". $valor['telefono'] . "::::".$valor['direccion']."----";
			}
			
		}
	}

	public function eliminar() {
		if ($this->input->post('key')) {
			$idd = $this->input->post('key');
			$this->Clientes->eliminar($idd);
		}
	}
}
