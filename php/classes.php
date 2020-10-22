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

$coche = new Coche();
$coche->encender();
