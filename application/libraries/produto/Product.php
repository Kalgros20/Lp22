<?php

class Product{

    private $db;

    function __construct(){
        $ci = & get_instance();
        $this->db = $ci->db;
    }

    /**
     * Retorna o codigo HTML da lista de produtos.
     */
    public function getProductList(){
        $sql = "SELECT * FROM produto";
        $rs = $this->db->query($sql);
        $m = $rs->result();

        $html = '';
        foreach($m AS $prod){
            $html .= $this->getListRow($prod);
        }
        return $html;
    }

    private function getListRow($obj){
        $edit = '<a href="'.base_url('produto/editar/'.$obj->id).'"><i class="fa pull-right fa-pencil-square-o" aria-hidden="true"></i></a>';
        $delete = '<a href="'.base_url('produto/deletar/'.$obj->id).'"><i class="fa pull-right fa-times" aria-hidden="true"></i></a>';

        $html = '<div class="media mb-1">
                    <a class="media-left waves-light">
                        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-10.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">'.$obj->nome.$delete.$edit.'</h4>
                        <p>'.$obj->descricao.'</p>
                        <p>'.$obj->preco.'</p>
                    </div>
                </div>';
        return $html;
    }

    public function getProduct($id){
        $rs = $this->db->get_where('produto', array('id' => $id));
        return $rs->row();
    }

    public function updateProduct($data, $id){
        $this->db->update('produto', $data, array('id' => $id));
    }

    public function insertProduct($data){
        return $this->db->insert('produto', $data);
    }

    public function delete($id){
        $this->db->delete('produto', array('id' => $id));
    }
}