<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';
        require_once 'Carro.php';
        
        $c1 = new Caneta;
        $c1 ->cor = "azul";
        $c1 ->ponta = 0.5;
        $c1 ->tampar();
        print_r($c1);
        
        echo  "<br>";
        
        $c2 = new Caneta;
        $c2 -> cor = "verde";
        $c2 ->tampar();
        print_r($c2);
        
        echo  "<br><br>";
        $car = new Carro;
        $car->cor="preta";
        $car->marca="corola";
        $car->tipo="van";
        $car->placa="jhu-5060";
        $car->power();
        print_r($car);
           
        
        
        
        
        
        ?>
    </body>
</html>
