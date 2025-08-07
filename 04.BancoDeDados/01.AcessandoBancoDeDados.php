<?php
include("../pass.php");
use db\Pass as db;

$dsn = "mysql:hostname=localhost;dbname=".db::$dbname;
$pdo = new PDO($dsn, db::$username, db::$password);


?>