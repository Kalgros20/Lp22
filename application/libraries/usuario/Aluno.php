<?php
    class Aluno extends Usuario{
        private $cursos = array();
        private $semestre;
        private $dependencias = array();
        private $disciplinas =  array();

        public function __construct($nome,$gu){
            //nunca escrevemos código antes da chamada do construot da classe pai
            parent::__construct($nome,$gu);
        }

        public function getSemestre(){
            return $this->semestre;
        }
        public function setSemestre(int $semestre){
            if($semestre > 0 | $semestre < 11)
            {
            $this->semestre = $semestre;
            }
            else
            {
            $this->semestre = 1;
            }
        }
    }
?>