<?php

include APPPATH.'libraries/freebies/Anuncio.php';


class FreebiesModel extends CI_Model{

    public function getTitle(){
        return 'LP II - the best discipline in the world!';
    }

    private $description = array(
        'Relogio feminino banhado a ouro 24k. Feito com metal precioso hungaro do Sec. XVI',
        'Feita com fios de pele de urso polar... ideal para dias de inverno rigoroso na Siberia',
        'Tecido fino para vestir com elegancia e sofisticacao... a opcao da mulher moderna',
        'Moderno e delicado... os oculos que vao fazer o seu olhar sorrir',
        'Bolsa para todos os momentos. Elegante, discreta; feita pra quem tem muito dinheiro');

    private function getDescription($index){
        return $this->description[$index];
    }


    private $product = array('Rolex Super Special', 'Jaqueta Cristian Dior', 
    'Blusa Yves St. Laurent', 'Oculos Baush & Lomb', 'Bolsa Prada');

    private function getProduct($index){
        return $this->product[$index];
    }


    private $image = array(107, 108, 109, 110, 36);
    private function getImage($index){
        return $this->image[$index];
    }

    public function getRowData($index){
        $data['img'] =  $this->getImage($index);
        $data['product'] = $this->getProduct($index);
        $data['description'] = $this->getDescription($index);
        return $data;
    }
    
    public function getListaAnuncio(){
        $html = '';
        
        for($index = 0; $index < sizeof($this->product); $index++){
            $imagem = $this->getImage($index);
            $titulo = $this->getProduct($index);
            $descricao = $this->getDescription($index);
            
            $anuncio = new Anuncio($titulo, $descricao);
            $anuncio->setImageNumber($imagem);
            $html .= $anuncio ->getHTML();
        }
        return $html;
    }
    
}