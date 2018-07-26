<?php


class Carro {
    var $cor;
    var $modelo;
    var $tipo;
    var $marca;
    var $placa;
    
    function power(){
        $this -> ligar = true;
        
    }
    
    function poweroff(){
        $this-> desligar = FALSE;
    }
}
