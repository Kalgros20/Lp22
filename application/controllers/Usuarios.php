<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Usuarios extends CI_Controller{
        
        public function index(){ //A gente coloca public
            $this->load->model('UsuarioModel','user');
            $data['lista_usuario'] = $this->user->getAll();
            $this->load->view('usuario/lista',$data);
        }
    }

?>