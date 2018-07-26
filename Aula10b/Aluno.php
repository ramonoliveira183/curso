<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {

    //atributos
    private $matr;
    private $curso;
    
    //Métodos
    
    public function cancelarMatr(){
        echo '<p>Matricula seré cancelada </p>';
    }
    
    function getMatr() {
        return $this->matr;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatr($matr) {
        $this->matr = $matr;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


    
    
}
