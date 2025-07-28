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
        // enquanto sessões são armazenadas no lado do servidor e geralmente expiram quando o navegador é fechado
        session_start();
        $_SESSION["nome"] = "Lucas";
        $_SESSION["idade"] = 24;
        
        echo $_SESSION["nome"];
        
        //acabar com as sessoes
        /*session_destroy();
        unset($_SESSION);*/
        //acabar com as sessoes
        
        if(isset($_SESSION["nome"])){
            echo $_SESSION["idade"];
        }else{
            echo "sem sessão";
        }
       
        //cookies são armazenados no lado do cliente (navegador do usuário) e têm um tempo de expiração configurável
        setcookie("nome","Noah",time()+60);
        echo $_COOKIE["nome"];
        ?>
    </body>
</html>
