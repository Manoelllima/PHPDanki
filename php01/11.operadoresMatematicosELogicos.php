<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            /*
              Operadores Matematicos
              > - Maior
              < - Menor
              >= - Maior ou igual
              <= - Menor ou igual
              == - Igual
              != - Diferente
            */
        
            /*             
              Operadores Logicos             
              && - quando todas as condições forem verdadeiras
              || - quando uma das condições forem verdadeiras
              ! - inverte o valor
            */
        
            $idade = 18;
            $nome = "Lucas";
        
            if($idade == 18  && $nome == "Lucas"){
                echo "todas as verificações são verdadeiras <br>";
            }
            
            if($idade > 15 || $nome == "Noah"){
                echo "uma das verificações e verdadeira <br>";
            }
        ?>
    </body>
</html>
