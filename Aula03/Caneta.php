<?php


class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
   
   
    public function rabiscar(){
       if($this->tampada == TRUE){
           echo '<P> ERRO! Não posso rabiscar!';
       
       }else {
     
       echo 'Estou rabiscando...';
 }
       
   }
   public function tampar(){
       $this->tampada =TRUE;
   }
   
   public function destampar(){
       $this->tampada = FALSE;
   }
   
}
