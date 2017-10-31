<?php
    class Usuario{
        private $nome;
        private $gu;
        private $nascimento;

        public function __construct($nome,$gu){
            $this->nome = $nome;
            $this->gu = $gu;
            
        }

        public function getNome(){
            return $this->nome;
        }
        public function getGu(){
            return $this->gu;
        }
        public function getNascimento(){
            return $this->nascimento;
        }

        //setters são métodos usados para que o mundo eterno
        //atribua valores aos atributos de uma classe
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setGu($gu){
            $this->gu = $gu;
        }
        public function setNascimento($nascimento){
            $this->nascimento = $nascimento;
        }       


    }
?>