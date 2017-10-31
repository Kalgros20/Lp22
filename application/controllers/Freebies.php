<?php

class Freebies extends CI_Controller{

    public function temporario(){
        /* $this->load->helper('url'); */
        $this->load->view('freebies/cabecalho');
        $this->load->view('freebies/navbar');

        // 1. carregamento do model
        // 2. obter dados a partir do model
        // 3. passar esses dados para a view
        $this->load->model('FreebiesModel', 'model');
        $data['title'] = $this->model->getTitle();
        $this->load->view('freebies/title', $data);

        $data['lista_anuncio'] = $this->model->getListaAnuncio();
        $this->load->view('freebies/main', $data);
        
        // final da página
        $this->load->view('freebies/pagination');
        $this->load->view('freebies/footer');
        $this->load->view('freebies/rodape');
    }

}