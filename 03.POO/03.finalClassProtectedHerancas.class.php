<?php

namespace Heranca;

final class Carro{// final impedi que a classe seja herdada    
   public function ligar() {
       echo "O carro esta ligado";
   }
        
}

class Pessoa{
    //protected, proteje a propriedades sendo acessivel atraves de metodos.
    protected int $CPF; 
    protected int $nascimento;
    protected string $nome;

    public function setCPF(int $CPF) {
        $this->CPF = $CPF;
    }
    
    public function setIdade(int $nascimento) {
        $this->idade = $nascimento;
    }
    public function setNome(string $nome) {
        $this->nome = $nome;
    }
    
    public function getCPF() {
        echo "<br> CPF: ".$this->CPF;
    }
    
    public function getNascimento() {
        echo "<br> Nascimento: ".$this->nascimento;
    }
    
    public function getNome() {
        echo "<br> Nome: ".$this->nome;
    }
}


class Funcionario extends Pessoa{ // extends (herança) herdar todas as propriedades e metodos da classe pai
}


$joao = new Funcionario();
$car =  new Carro();
$car->ligar();

$joao->setCPF(99999999999);

$joao->getCPF();


?>
