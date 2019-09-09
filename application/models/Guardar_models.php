<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guardar_models extends CI_Model {

    public function guardar_usu($data){

        return $this->db->insert("tb_usuario",$data);     

    }
    public function guardar_perfil($data){

        return $this->db->insert("tb_perfil",$data);     

    }

}
