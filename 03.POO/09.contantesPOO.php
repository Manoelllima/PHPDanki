<?php

class Teste {
    public const value = 100; //declaração de constante usasse a keyword const
    
    
    function __construct() {
        echo self::value; //chamada de constante usasse o self::
        //constantes não podem ter seus valores altereados
    }
    
}

new Teste();

?>