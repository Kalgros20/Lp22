<?php
    class Administrativo extends Usuario
    {
        private $departamento;
        private $horario;
        
        public function __construct($nome,$gu){
            //nunca escrevemos código antes da chamada do construot da classe pai
            parent::__construct($nome,$gu);
        }

        public function getDepartamento(){
            return $this->departamento;
        }
        
        public function setDepartamento($departamento){
         $this->departamento = $departamento;
        }
        
    }
?>