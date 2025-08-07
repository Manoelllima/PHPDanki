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
        // trechos de codigo reutilizaveis
        
        function soma($numUm, $numDois){
            echo "A soma dos valores é: ".$numUm + $numDois;
        }
        
        function verificacaoIdade($idadeUm, $idadeDois){
            if($idadeUm > $idadeDois){
                echo "O primeiro é mais velhor que o segundo";
            }else{
                echo "O Segundo é mais velhor que o primeiro";
            }
        }
        
        soma(20,30);
        echo "<br>";
        verificacaoIdade(10, 20);
        ?>
    </body>
</html>
