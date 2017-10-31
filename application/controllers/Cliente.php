<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{

    public function lista(){
        $this->load->view('cliente/lista');
    }

}