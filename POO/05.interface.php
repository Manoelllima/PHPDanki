<?php
namespace interfaceclass;

interface  InterfaceClass{
    //interfaces so vão conter metodos
    
    function metodoUm();
    function metodoDois();
    function metodoTres();
    function metodoQuatro();    
}

class Teste implements InterfaceClass{ //chama de interface usasse o implements
    
    #[\Override]
    public function metodoDois() {
        echo "Chamada de metodo Um";
    }

    #[\Override]
    public function metodoQuatro() {
         echo "Chamada de metodo Dois";
    }

    #[\Override]
    public function metodoTres() {
         echo "Chamada de metodo Tres";
    }

    #[\Override]
    public function metodoUm() {
         echo "Chamada de metodo Quatro";
    }
}
?>