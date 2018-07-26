<?php


class Caneta {
    public $modelo;
    private $ponta;
    private $cor;
    
    /**
     *
     * @var bool
     */
    private $tampada = false;

   
    function __construct($modelo, $ponta, $cor) {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->cor = $cor;
        $this->setTampada(false);
        //$this->tampada=false;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCor() {
        return $this->cor;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }


}
