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
        
            $arrayMulti = array(array("Noah","Lucas","Carol"),array(3,28,16));           
            for($i = 0; $i < count($arrayMulti); $i++){
                //echo "nome: ".$arrayMulti[0][$i]."<br>";
                for($j = 0; $j < count($arrayMulti)+1; $j++){
                    if($i == 0){
                        echo "nome: ".$arrayMulti[$i][$j]."<br>";  
                    }else if($i == 1){
                        echo "idade: ".$arrayMulti[$i][$j]."<br>"; 
                    }                             
                }
            }
            echo "<br>";
            
            foreach ($arrayMulti as $line) {    
                echo $key."<br>";
                foreach ($line as $value) {
                    echo $value."<br>";
                }
            }
            
        ?>
    </body>
</html>
