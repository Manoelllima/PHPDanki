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
        sleep(3);
        echo "teste<br>";
        
        for ($i = 0; $i < 10; $i++){
            echo $i."<br>";
            if($i == 5){
                die();
            }
        }
        ?>
    </body>
</html>
