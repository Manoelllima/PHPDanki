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
        // declaração de array
        $nomes = array("Lucas", "Carol", "Noah");
        $idades[] = 28;
        $idades[] = 26;
        $idades[] = 3;
        $familia = ["pai", "mae", "filho"];
        echo $nomes[2]."<br>";
        echo $idades[2]." anos <br>";
        echo $familia[2]."<br>";
        
        //os indices tambem podem ser palavras e seus valor podem ser de tipos variados
        $informacoes["nome"] = "Noah";
        $informacoes["idade"] = 3;
        $informacoes["cidade"] = "Castanhal";
        
        echo $informacoes["nome"]."<br>";
        echo $informacoes["idade"]."<br>";
        echo $informacoes["cidade"]."<br>";
        ?>
        
    </body>
</html>
