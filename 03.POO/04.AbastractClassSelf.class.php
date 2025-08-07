<?php
namespace abstractClass;
abstract class Teste{
    //metodos abastratos força a classe que esta herdando a declarar esse metodos
    abstract public function metodoUm();
    abstract public function metodoDois();
    abstract public function metodoTres();
    
    
    //metodo comuns
    public function metodoQuatro() {
        echo "metodo quatro";
    }
}

class TesteDois extends Teste{
    
    #[\Override]
    public function metodoDois() {
        echo "metodo dois";
    }

    #[\Override]
    public function metodoTres() {
        echo "metodo tres";
    }

    #[\Override]
    public function metodoUm() {
        echo "metodo um";
    }
}

class TesteTres extends Teste{
    
    #[\Override]
    public function metodoDois() {
        echo "utilizando metodo ou propriedade da classe que não seja estatico com \$this";
    }

    #[\Override]
    public function metodoTres() {
        
    }

    #[\Override]
    public function metodoUm() {
        
    }
    
    public function utilizandoOutroMetodo() {
        $this->metodoDois();
    }
    
    private static function utilizandoSelf(){
        echo "<br>aqui um metodo estatico";
    }
    
    public function metodoSelf(){
        echo self::utilizandoSelf().": chamando metodo estatico da classe com o self::nomeDoMetodo";
    }
}

$teste =  new TesteDois();
$testeTres = new TesteTres();
$teste->metodoQuatro();
$teste->metodoDois();
$testeTres->metodoSelf();
?>