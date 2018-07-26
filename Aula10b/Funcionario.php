<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa{

    //atributos 
    private $setor;
    private $trabalhando;
    
    //metodos
    public function mudarTrabalho() {
        $this->trabalhando = !$this->trabalhando;
    }
    
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }


}
