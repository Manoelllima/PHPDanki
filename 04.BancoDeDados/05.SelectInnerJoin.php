<?php

include("../pass.php");
use db\Pass as db;

$dsn = "mysql:hostname=localhost;dbname=".db::$dbname;
$pdo = new PDO($dsn, db::$username, db::$password);

$sql = $pdo->prepare("SELECT * FROM posts");
$sql->execute();
$result = $sql->fetchAll();
//echo '<pre>'.print_r($result).'</pre>';

echo "laço foreach<br>";
foreach ($result as $key => $value) {
    echo "Titutlo da Noticia: ".$value['titulo']."<br>";
    echo "Conteudo da Noticia <br>".$value['conteudo'];
}
echo "<br><br> <hr>";
echo "laço for<br>";

for($i=0; $i < count($result); $i++){
    echo "Titutlo da Noticia: ".$result[$i]['titulo']."<br>";
    echo "Conteudo da Noticia <br>".$result[$i]['conteudo'];
}
echo "<br><br> Fim..<hr>";

$sqlCategoria = $pdo->prepare("SELECT * FROM `categoria_id`");
$sqlCategoria->execute();
$resultCategoria = $sqlCategoria->fetchAll();

//echo print_r($resultCategoria);
echo "laço foreach<br>";
foreach ($resultCategoria as $key => $value) {
    $categoria_id = $value['id'];
    echo "Id da Categoria: ".$value['id']."<br>";
    echo "Identificador da categoria: ".$value['nome']."<br>"; 
    
    
    $posts = $pdo->prepare("SELECT * FROM `posts` WHERE categoria_id=$categoria_id");
    $posts->execute();
    $postResults = $posts->fetchAll();
    
    foreach ($postResults as $key => $value) {        
        echo "Identificador da categoria: ".$value['titulo']."<br>";
        echo "Identificador da categoria: ".$value['conteudo']."<br>";
    }
    echo "<br>";
}
echo " Fim...<hr>";
echo "<br> <br>";
 
 
//$innerJoin = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categoria_id`"); //Junta as duas tabelas
$innerJoin = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categoria_id` ON `posts`.`categoria_id` = `categoria_id`.`id`");
$innerJoin->execute();
$resultInnerJoin = $innerJoin->fetchAll(PDO::FETCH_ASSOC);
echo"<pre>";
echo print_r($resultInnerJoin);
echo"</pre>";
?>
