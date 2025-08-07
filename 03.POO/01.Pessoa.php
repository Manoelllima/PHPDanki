<?php

class Pessoa {  
    //propriedades
    private string $nome;
    private int $idade;
    private int $peso;
    
    //metodo contrutor
    public function __construct(string $nome, int $idade, int $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
    }
    
    //metodo da classe
    public function getNome(){
        return $this->nome;
    }
}  

//instancia do objeto
$teste = new Pessoa("Noah",4,5);

echo $teste->getNome(); //chamada de metodo
