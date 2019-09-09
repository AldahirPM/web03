<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Guardar_models");
	}
	public function index()
	{	
		$this->load->view('menu/head');
		$this->load->view('menu/menu');
		$this->load->view('menu/ventanaprincipal');
		$this->load->view('menu/footer');
	}

	public function agregar()
	{
		$this->load->view('menu/head');
		$this->load->view('menu/menu');
		$this->load->view('menu/agregar_usu');
		$this->load->view('crear/crear_usuario');
		$this->load->view('menu/footer');
		
	}
	public function agregar_perfil()
	{
		$this->load->view('menu/head');
		$this->load->view('menu/menu');
		$this->load->view('menu/agregar_usu');
		$this->load->view('crear/crear_perfil');
		$this->load->view('menu/footer');
		
	}
	public function agregar_acceso(){
			
		$this->load->view('menu/head');
		$this->load->view('menu/menu');
		$this->load->view('menu/agregar_usu');
		$this->load->view('crear/crear_perfil');
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
		$password = md5($this->input->post("contra"));
		$date= date("Y-m-d H:i:s");
		
		$this->form_validation->set_rules("nombre1"," Primer Nombre","required");
		$this->form_validation->set_rules("nombre2","Segundo Nombre","required");
		$this->form_validation->set_rules("apellido1","Primer Apellido","required");
		$this->form_validation->set_rules("apellido2","Segundo Apellido","required");
		$this->form_validation->set_rules("usuario","Es necesario Usuario","required");
		$this->form_validation->set_rules("correo","Correo","required|valid_email");
		$this->form_validation->set_rules("cbtipo","Tipo","required");
		$this->form_validation->set_rules("contra","La contraseña","required");

		if($this->form_validation->run()){

			$data = array(
				'id_usuario' =>null,
				'nom1' =>$nombre1,
				'nom2' =>$nombre2,
				'ape1' =>$apellido1,
				'ape2' =>$apellido2,
				'nickname' =>$usuario,
				'password' =>$password,
				'correo' =>$correo,
				'usu_creator' =>$usuario,
				'f_create' =>$date,
				'f_modifica' => $date,
				'id_perfil'  => $cbtipo
			);

			$this->Guardar_models->guardar_usu($data);
			$this->session->set_flashdata("add","Usuario Agregado"); 
			redirect(base_url()."index.php/menu/agregar");

		}else{
			$this->agregar();
		}

		
	
	}
	public function guardarperfil(){

		$nombre_perfil = $this->input->post("nombre_perfil");
		$tipo_perfil = $this->input->post("cbtipo_perfil");

		$this->form_validation->set_rules("nombre_perfil","Nombre del Perfil","required");
		$this->form_validation->set_rules("cbtipo_perfil","Selecionar","required");

		if($this->form_validation->run()){

			$data = array(
				'id_perfil'=> null,
				'tipo_perfil'=> $nombre_perfil,
				'accion'=> $tipo_perfil
			);
			$this->Guardar_models->guardar_perfil($data);
			$this->session->set_flashdata("add_perfil","Perfil Agregado"); 
			redirect(base_url()."index.php/menu/agregar_perfil");
	
			
		}
		else{
			$this->agregar_perfil();
		}

	}
	

	
}
?>
