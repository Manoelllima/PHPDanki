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
        // put your code here
        $frutas = array("maça","goiaba","manga","abacate");
        $opcao = 0;
        switch ($opcao){
            case 0:
                echo "Sua fruta é ".$frutas[$opcao];
                break;
            case 1:
                echo "Sua fruta é ".$frutas[$opcao];
                break;
            case 2:
                echo "Sua fruta é ".$frutas[$opcao];
                break;
            case 3:
                echo "Sua fruta é ".$frutas[$opcao];
                break;            
            default :
                echo "opcao invalida";
                break;
        }
        echo "<br>";
        for($i = 0; $i < 10; $i++){
            if($i == 2){
                continue; // pula
            }else if($i == 6){
                break; //para a operação
            }
            echo "contador e ".$i." <br>";
        }
        ?>
    </body>
</html>
