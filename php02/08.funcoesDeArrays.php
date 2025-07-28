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
        // https://www.php.net/manual/pt_BR/ref.array.php
        $frutas = array("maça","goiaba","manga","abacate");
        sort($frutas);
        
        echo print_r($frutas);
        ?>
    </body>
</html>
