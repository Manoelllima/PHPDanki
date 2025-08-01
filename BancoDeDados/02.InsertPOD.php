<?php
include("../pass.php");
use db\Pass as db;

$dsn = "mysql:hostname=localhost;dbname=".db::$dbname;
$pdo = new PDO($dsn, db::$username, db::$password);


if(isset($_POST["acao"])){
    $info = array(null,$_POST["nome"],$_POST["sobrenome"],'2025-07-31 10:35:00');
    echo $info[0];
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (?,?,?,?) ");
    $sql->execute($info); 
}

//

?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>        
        <form method="post">
            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="sobrenome" placeholder="Sobrenome">
            <input type="submit" name="acao" value="Enviar">
        </form>
    </body>
</html>
