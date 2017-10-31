<?php

class Anuncio {
    private $imagem;
    private $titulo;
    private $descricao;

    /** Texto exibido no botão do anúncio */
    private $rotuloBotao = 'Comprar';

    // um contrutor DEVE ser usado para inicializar valores
    // sem os quais um objeto dessa classe não faz sentido.
    public function __construct($titulo, $descricao){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    // documentar um método/função significa dizer o que a
    // o método faz, o que recebe como argumento e o que retorna.

    /**
     * Define o índice da imagem a ser exibida no anúncio.
     * @param $num: inteiro - número da imagem
     */
    public function setImageNumber($num){
        $this->imagem = $num;
    }


    public function getHTML(){
        $html = '<!--First row-->
        <div class="row mt-5 wow fadeIn" data-wow-delay="0.2s">
            <!--Featured image-->
            <div class="col-lg-7">
                <div class="view overlay hm-white-light z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20('.$this->imagem.').jpg" class="img-fluid" alt="">
                    <div class="mask"></div>
                </div>
            </div>
            <!--/.Featured image-->
        
            <!--Post excerpt-->
            <div class="col-lg-5">
                <a href="#!"><h2 class="post-title font-bold">'.$this->titulo.'</h2></a>
                <p class="my-4">'.$this->descricao.' </p>
                <div class="read-more">
                    <a href="#!" class="btn btn-primary">'.$this->rotuloBotao.'</a>
                </div>
            </div>
            <!--/.Post excerpt-->
        </div>
        <!--/.First row-->
        <hr class="extra-margin my-5">';
        return $html;
    }
}