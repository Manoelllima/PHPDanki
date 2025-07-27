<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Condicionais</title>
    </head>
    <body>
        <?php
            $idade = 18;
            $habilitado = true;
            if($idade < 18){
                echo "não pode entrar";
            }else{
                echo "pode entrar<br>";    
            }
            
            if($idade >= 18 && $habilitado){
                 echo " pode dirigir";    
            }else if($idade >= 18 && !$habilitado){
                echo "precisa tirar carteira de habilitação";
            }else if($idade < 18){
                echo "não pode dirigir";
            }
        ?>
    </body>
</html>
