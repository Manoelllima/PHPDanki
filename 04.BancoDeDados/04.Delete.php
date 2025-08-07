<?php

include("../pass.php");
use db\Pass as db;

$dsn = "mysql:hostname=localhost;dbname=".db::$dbname;
$pdo = new PDO($dsn, db::$username, db::$password);
$values = array('teste','teste');

//$sql = $pdo->prepare("DELETE FROM `clientes` WHERE nome='Manoel' OR sobrenome='teste' ");
$sql = $pdo->prepare("DELETE FROM `clientes`  WHERE  nome=?  OR sobrenome=? ");
if($sql->execute($values)){
   echo "deletado"; 
}

?>
