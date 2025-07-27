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
           define("NOMES", array("Noah","Carol","Lucas"));
            
            foreach (NOMES as $key => $value) {
                echo "valor do array nomes: ".$value."<br>";
            }
        ?>
    </body>
</html>
