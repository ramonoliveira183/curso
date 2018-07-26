<?php

class ContaBanco {
    //atributos
    
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    
    //metodos
    
    function __construct() {
        $this->saldo = 0;
        $this->status = false;
        echo '<p> Conta criada com sucesso!</p>';
        
    }
    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    function setDono($dono){
        $this->dono = $dono;
    }
    
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    
    function setStatus($status){
        $this->status = $status;
    }
    
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

// metodos espercificos:
    
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(TRUE);
        if 
            ($t == "cc"){
                $this->setSaldo(50);
        }elseif 
            ($t == "cp"){
                $this->saldo = 150;
        }
    }
    
    public function fecharConta(){
        if ($this->getSaldo() >0){
            echo "Impossivel fechar conta. Conta Corrente com Dinheiro";
        }elseif ($this->getSaldo() < 0) {
            echo "Conta com Debito, por favor regularize a conta para encere-la ";
        } else {
            $this->setStatus(FALSE);
                echo "Conta de" .$this->getDono()." fechada com sucesso" ;
            }
    }

    public function depositar($v){
        if ($this->getDono()){
            $this->setSaldo($this->getSaldo()+ $v);
            //$this->saldo = $this->saldo + $v
            echo "<p>Deposito de R$ $v na conta de ".$this->getDono().".</p>";
        }else {
            echo "Conta fechada, Impossível depositar";
        }
    }

    public function sacar($v){
        if ($this->getStatus()) {
            if ($this->getSaldo()>= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                //$this-> saldo = $this->saldo - $v
                echo "<p>Saque de R$ $v autorizado na conta de ".$this->getDono().".</p>";
            }  else{
              echo "Saldo Insuficiente";
            }
        }else{
            echo "Impossivel sacar de uma conta fechada";
        }
    }
    
    public function pagarMensal(){ // se e necessarios usar oi this
        
        if ($this->getTipo() == "cc"){
            $v = 12; 
        }else if ($this->getTipo() == "cp"){
            $v = 20;
        }
        if ($this->getStatus()){
             ($this->setSaldo($this->getSaldo() - $v) );
             echo "<p>Mensalidade de R$ $v  debitada da conta de " .$this->getDono().".</p>";
        }else{
                echo "Saldo Insuficiente!";
            }
        }
    }

    