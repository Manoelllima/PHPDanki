<?php

class Pessoa {
    
    private int $idade;
    private int $peso;
    private string $nome;
    
    function __construct(int $idade, int $peso, string $nome) { //metodo contrutor para inicializar algumas propriedades ou metodos
        $this->idade = $idade;
        $this->nome = $nome;
        $this->peso = $peso;
    }
    
    public function getNome(){
        echo "Meu nome é ".$this->nome."<br>";
    }
}
    
$pessoa = new Pessoa(3, 15, "Noah");

$pessoa->getNome();
?>