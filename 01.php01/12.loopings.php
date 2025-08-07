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
            $count = 1;
            $countDo = 1;
            for($i = 1; $i <= 10; $i++){
                echo "looping for: ".$i."<br>";
            }
            echo "<br>";
            
            while($count <= 10){
                echo "looping while: ".$count."<br>";
                $count++;
            }
            echo "<br>";
            
            do{
                echo "looping doWhile: ".$countDo."<br>";
                $countDo++;
            }while($countDo <= 10);
            
        ?>
    </body>
</html>
