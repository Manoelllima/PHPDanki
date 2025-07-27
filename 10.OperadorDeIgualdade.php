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
            $numUm = 10;
            $numDois = "10";
            $numTres = 10;
            if($numUm == $numTres ){
                echo "valores iguais";              
            }
            
            echo "<br>";
            if($numUm !== $numDois ){
                echo "valores iguais e tipos diferentes";
            }
            
            echo "<br>";
            if($numUm === $numTres){
                echo "valores iguais e tipos iguais";
            }
        ?>        
    </body>
</html>
