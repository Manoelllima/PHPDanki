<?php


class Gato {
    function __construct() {
        echo "classe gato";
    }
}

class Cachorro{
    function __construct() {
        echo "classe cachorro";
    }
}


class Animal{

    public static function build($class) {
        if(file_exists($class.".php")){
            return new $class;
        }else{
           die( "A classe não existe");
        }
    }
    
}


new Gato();

Animal::build("Gato");