<?php

class Teste {
    private int $valor = 10; //visivel somente para essa classe
    public string $nome = "teste"; //visivel para as instancias dessa classe
    public static string $teste = "teste"; // não precisa instanciar para ter acesso.

    public function soma(int $numUm, int $numDois){
        return self::frase().$numUm + $numDois;
    }
    
    private function frase() {
        return "o resultado é: ";
    }
    
    public static function functionStatic() {
        return "esta é uma função estatica";
    }
}

$testeUm = new Teste();

echo Teste::$teste."<br>";
echo $testeUm->soma(10, 10)."<br>";

echo Teste::functionStatic();
?>