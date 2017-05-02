<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rlogin extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
    }

	public function index() {
		redirect('Rlogin/home');
	}

	public function home() {		
		$this->load->view('admin/home', $data );
	}

	public function vista_login() {
		$data['listIngreso'] = $this->Login->listar(); //modelo
		$this->load->view('admin/vista_login', $data ); // vista
	}
	public function Admin(){
		$this->load->view('quehacer' ); // vista

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

	
//Función para buscar el Usuario en la BD.
	public function IngresoPersonal() {
		if ($this->input->post('key')) {
			$data = $this->Login->IngresoPersonal($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['id'] . "::::" . $valor['usuario'] . "::::". $valor['clave']."----";
			}
			
		}
	}

	
}
