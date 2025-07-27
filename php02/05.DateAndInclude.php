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
      
        include("04.funcoes.php");
        echo "<br>";
        soma(20, 50);
        echo "<br>";
        
        date_default_timezone_set("America/Sao_Paulo");
        $data = Date("d/m/y h:m:s");
        echo $data;
        ?>
    </body>
</html>
