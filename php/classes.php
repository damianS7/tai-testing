<?php

interface AccionesCoche {
    public function encender();
    public function apagar();
}

abstract class Car implements AccionesCoche {
    abstract public function demo();
}

class Coche extends Car {
    public function demo() {
        echo "Hello world!";
    }
    
    public function encender() {
        echo "Encender";
    }
    
    public function apagar() {
        echo "Apagar";
    }
}

// Clase anonima
$foo = new class {
    public function foo() {
        return "bar";
    }
};
$foo->foo();


$coche = new Coche();
//$coche->encender();
//echo get_class($coche); // Nombre de la clase del objeto
echo gettype($coche); // Nombre de la clase del objeto
