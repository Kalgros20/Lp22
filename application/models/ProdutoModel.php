<?php

include APPPATH.'libraries/produto/Product.php';

class ProdutoModel extends CI_Model{

    public function getListaProduto(){
        $p = new Product();
        return $p->getProductList();
    }

    /**
     * Insere novos produtos no banco de dados
     * @return boolean: insere ou não dados no bd 
     */
    public function insereProduto(){
        if(sizeof($_POST) == 0) return false;
        
        $this->form_validation->set_rules('produto', 'Nome do produto', 'required|min_length[2]|max_length[40]');
        $this->form_validation->set_rules('descricao', 'Detalhes sobre o produto', 'required|min_length[5]');
        $this->form_validation->set_rules('preco', 'Valor a ser pago pelo produto', 'required', 'callback_intervalo');

        if($this->form_validation->run()){
            $data = $this->input->post();
            $p = new Product();
            $p->insertProduct($data);
        }
        else echo validation_errors();
    }

    function intervalo($valor){
        $num = floatval($valor);

        if($num > 100 & $num < 200)
            return true;
        else{
            $this->form_validation->set_message('O valor deve estar entre 100 e 200');
            return false;
        }
    }

    public function atualizaProduto(){
        if(sizeof($_POST) == 0) return false;

        $id = $this->input->post('id');
        $data['preco'] = $this->input->post('preco');
        $data['nome'] = $this->input->post('produto');
        $data['descricao'] = $this->input->post('descricao');

        $p = new Product();
        $p->updateProduct($data, $id);
    }

    
    public function carregaProduto($id){
        $p = new Product();
        $prod = $p->getProduct($id);
        $_POST['produto'] = $prod->nome;
        $_POST['descricao'] = $prod->descricao;
        $_POST['preco'] = $prod->preco;
    }

    public function delete($id){
        $p = new Product();
        return $p->delete($id);
    }
}