<?php

class Produto extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->output->enable_profiler(TRUE);
    }

    public function index(){
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar');

        $this->load->model('ProdutoModel', 'model');
        $data['lista'] = $this->model->getListaProduto();
        $this->load->view('produto/lista', $data);

        $this->load->view('component/rodape');
    }

    public function cadastrar(){
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar');

        $this->load->model('ProdutoModel', 'model');
        $this->model->insereProduto();

        $data['action'] = 'produto/cadastrar';
        $this->load->view('produto/form', $data);
        $this->load->view('component/rodape');
    }

    public function editar($id = 0){
        $this->load->view('component/cabecalho');
        $this->load->view('component/navbar');

        $this->load->model('ProdutoModel', 'model');
        $this->model->carregaProduto($id);
        $this->model->atualizaProduto();

        $data['id'] = $id;
        $data['action'] = 'produto/editar';
        $this->load->view('produto/form', $data);
        $this->load->view('component/rodape');
    }

    public function deletar($id = 0){
        $this->load->model('ProdutoModel', 'model');
        $this->model->delete($id);
        redirect('produto');
    }
}