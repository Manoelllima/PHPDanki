<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .box{
                background-color: blue;
                height: 100px;
                width: 100px;
            }
        </style>
    </head>
    <body>
        <?php
        //para concatenar uma string com um variavel/constante utilizasse o ponto
        define("NOME", "Noah");
        $idade = 3;
        
        echo "Meu nome é ".NOME." e minha idade è ".$idade;
        
        echo "<div class=\"box\"></div>"
        ?>
    </body>
</html>
