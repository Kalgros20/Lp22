<?php
    class Professor extends Usuario
    {
        private $disciplinas;
        private $curso;

        public function __construct($nome,$gu)
        {
            //nunca escrevemos código antes da chamada do construot da classe pai
            parent::__construct($nome,$gu);
        }

        public function getCurso(){
            return $this->curso;
        }
        
        public function setCurso($curso){
         $this->departamento = $departamento;
        }
        
    }
?>