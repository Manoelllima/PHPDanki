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
        //https://www.php.net/manual/en/ref.strings.php
        
        $text = "lorem epson";
        $test;
        $sub = substr($text, 2);
        $test = explode(" ", $text);
        echo $test[1];
        echo $sub[6];
        
        ?>
    </body>
</html>
