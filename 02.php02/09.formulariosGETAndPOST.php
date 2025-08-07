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
        // https://www.php.net/manual/pt_BR/function.isset.php
        //os metodos GET e POST sempre iram buscar pelo atributo name
        if(isset($_GET["acao"])){ //verifica se foi enviado
            $nome = $_GET["email"];
            $senha = $_GET["senha"];            
            echo $nome;
        }
        
        
        if(isset($_POST["acao"])){ //verifica se foi enviado
            $nome = $_POST["email"];
            $senha = $_POST["senha"];      
            $idade = $_POST["idade"];
            echo $idade;
        }
        ?>
        
        <form> <!-- metodo GET -->
            <input type="email" name="email">
            <input type="password"  name="senha">
            <input name="acao" type="submit" value="Enviar">
        </form>
        
        
        <form method="post"> <!-- metodo POST -->
            <input type="email" name="email">
            <input type="password"  name="senha">
            <select name="idade">
                <option>maior de 18</option>
                <option>menor de 18</option>
            </select>
            <input name="acao" type="submit" value="Enviar">
        </form>
    </body>
</html>
