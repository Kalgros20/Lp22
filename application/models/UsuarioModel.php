<?php
        defined('BASEPATH') OR exit('No direct script access allowed');

        include APPPATH. 'libraries/usuario/Aluno.php';
        include APPPATH. 'libraries/usuario/Professor.php';
        include APPPATH. 'libraries/usuario/Funcionario.php';

        class UsuarioModel extends CI_Model{
            
            public function getAll()
            {
                $a1 = new Aluno('Neil Tyson', 1661519);
                $a2 = new Aluno('Mike Tyson', 6845);
                $a3 = new Aluno('Xesque Dele', 6548);
                $a4 = new Aluno('Av Maria', 4646);

                $p1 = new Professor('Buddy Love', 68922);
                $p2 = new Professor('Annelise Keating', 74521);

                $p1 = new Funcionario('Janio Quadros', 68922);
                
                $dados = array ($a1,$a)
                echo "Ok Model! ";
            }
        }

?>