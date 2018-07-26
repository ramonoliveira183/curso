<?php

require_once 'Pessoa.php';

class Prefessor extends Pessoa{

    //Atributos
    private $espercialidade;
    private $salario;
    
    public function receberAum($valor){
        $this->salario += $valor;
    }
    
    function getEspercialidade() {
        return $this->espercialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspercialidade($espercialidade) {
        $this->espercialidade = $espercialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


}
