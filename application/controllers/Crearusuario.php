<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crearusuario extends CI_Controller {


	/*public function __construct(){
		parent::__construct();
		$this->load->model("Guardar");
	}*/
    
	public function index()
	{
		$this->load->view('menu/head');
		$this->load->view('menu/menu');
		//$this->load->view('menu/agregar_usu');
		//$this->load->view('crear/crear_usuario');
		$this->load->view('menu/footer');
		
	}



	public function guardarusu(){
		$nombre1 = $this->input->post("nombre1");
		$nombre2 = $this->input->post("nombre2");
		$apellido1 = $this->input->post("apellido1");
		$apellido2 = $this->input->post("apellido2");
		$usuario = $this->input->post("usuario");
		$correo = $this->input->post("correo");
		$cbtipo= $this->input->post("cbtipo");
		$password = $this->input->post("contra");
		//echo $nombre1." ".$nombre2." ".$apellido1."".$apellido2."".$usuario."".$correo."".$cbtipo."".$password;
		$data = array(
			'id_usuario' =>null,
			'nom1' =>$nombre1,
			'nom2' =>$nombre2,
			'ape1' =>$apellido1,
			'ape2' =>$apellido2,
			'nickname' =>$usuario,
			'correo' =>$correo,
			'f_create' => null,
			'f_modifica' =>null,
			'id_perfil'  => 1
		);
		if($this->Guardar_models->guardar_usu($data)){
			redirect(base_url()."index.php/menu");
		}else{
			redirect(base_url()."index.php/menu/agregar");

		}

	}
}
