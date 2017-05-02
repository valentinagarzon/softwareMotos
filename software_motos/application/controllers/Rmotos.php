<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rmotos extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
    }

	public function index() {
		redirect('Rmotos/home');
	}

	public function home() {		
		$this->load->view('admin/home', $data );
	}

	public function vista_motos() {
		$data['listRegistro_motos'] = $this->Motos->listar(); //modelo
		$this->load->view('admin/vista_motos', $data ); // vista
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( ! $this->input->post('placa'))
		{
			redirect('index.php/Rmotos/vista_motos');
		} else {
			$placa = $this->input->post('placa');
			$color = $this->input->post('color');
			$modelo = $this->input->post('modelo');
			$numero_chasis = $this->input->post('numero_chasis');
			$cilindraje = $this->input->post('cilindraje');

			if (! $this->input->post('idd')) {
				if(!$this->Motos->existe(0, $placa, $color, $modelo, $numero_chasis, $cilindraje)) {
					$dat = array('placa' => $placa, 'color' => $color, 'modelo' => $modelo, 'numero_chasis' => $numero_chasis, 'cilindraje' => $cilindraje);
					$this->Motos->insertar($dat);
				} else {
					//$this->session->set_userdata('msg', 'Equipo ya existe. Verifique datos');
				}
			} else {
				$idd = $this->input->post('idd');
				$dat = array('placa' => $placa, 'color' => $color, 'modelo' => $modelo, 'numero_chasis' => $numero_chasis, 'cilindraje' => $cilindraje);
				$this->Motos->actualizar($dat, $idd);
				//$this->session->set_userdata('msg', 'Equipo '. $nombre . '(' . $region . ') editado correctamente');
			}
			redirect('index.php/Rmotos/vista_motos');
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

	public function listarFiltroMotos() {
		if ($this->input->post('key')) {
			$data = $this->Motos->listar_filtro($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['id'] . "::::" . $valor['placa'] . "::::". $valor['color'] . "::::". $valor['modelo'] . "::::". $valor['numero_chasis'] . "::::". $valor['cilindraje']."----";
			}
			
		}
	}

	public function eliminar() {
		if ($this->input->post('key')) {
			$idd = $this->input->post('key');
			$this->Motos->eliminar($idd);
		}
	}
}
