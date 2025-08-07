<?php

include("../pass.php");
use db\Pass as db;

$dsn = "mysql:hostname=localhost;dbname=".db::$dbname;
$pdo = new PDO($dsn, db::$username, db::$password);
$values = array('Manoel','Lima');


//$sql = $pdo->prepare("UPDATE `clientes` set nome='Noah',sobrenome='Souza',momento_registro='2025-07-31 10:35:00'");
//$sql = $pdo->prepare("UPDATE `clientes` set nome='Noah',sobrenome='Lima',momento_registro='2025-08-03 10:35:00' WHERE id=1");
//$sql = $pdo->prepare("UPDATE `clientes` set nome='manoel',sobrenome='lima',momento_registro='2025-08-03 10:35:00' WHERE nome='Manoel' AND sobrenome='Lima' ");
//$sql = $pdo->prepare("UPDATE `clientes` set nome='teste',sobrenome='teste' WHERE nome='Manoel' OR sobrenome='teste' ");
$sql = $pdo->prepare("UPDATE `clientes` set nome=?,sobrenome=? WHERE nome='carol' OR sobrenome='teste' ");
if($sql->execute($values)){
   echo "atualizado"; 
}

?>
