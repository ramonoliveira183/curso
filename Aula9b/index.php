<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <pre>
        <?php
        
                
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p[0] = new Pessoa("Joao", 22, "M"); 
        $p[1] = new Pessoa("Maria", 28, "F"); 
        
        
        $l[0] = new Livro("O mundo de Sofia", "Alguem da siva", 650, $p[0]);
        $l[1] = new Livro("Quem Roubou meu queijo", "fulano vivante", 350, $p[0]);
        $l[2] = new Livro("Grande Sertão Veredas", "Beltrano da costa", 900, $p[1]);
        
        $l[0]->detalhes();
        
        $l[1]->detalhes();
        
        $l[2]->detalhes();
        ?>
        </pre>
    </body>
</html>
