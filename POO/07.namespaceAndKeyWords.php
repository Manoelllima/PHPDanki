<?php

include("./03.finalClassProtectedHerancas.class.php"); //define um namespace em outros arquivos, inclui o mesmo no arquivo desejado
include './04.AbastractClassSelf.class.php';
use abstractClass\Teste as abs; //utilize o keyworde use para pegar o namespace e a classe e o keyWord as para dar um apelido ao mesmo.
use Heranca\Pessoa as pessoa;
$teste = new \Heranca\Pessoa();



$teste->setNome("teste");
$teste->getNome();

class teste extends abs implements pessoa{
    
    #[\Override]
    public function metodoDois() {
        
    }

    #[\Override]
    public function metodoTres() {
        
    }

    #[\Override]
    public function metodoUm() {
        
    }
}