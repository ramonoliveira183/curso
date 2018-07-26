<?php


class Caneta {
   var $modelo;
   var $cor;
   var $ponta;
   var $carga;
   var $tampada;
   
   
   function rabiscar(){
       if($this->tampada == TRUE){
           echo '<P> ERRO! Não posso rabiscar!';
       
       }else {
     
       echo 'Estou rabiscando...';
 }
       
   }
   function tampar(){
       $this->tampada =TRUE;
   }
   
   function destampar(){
       $this->tampada = FALSE;
   }
   
}
