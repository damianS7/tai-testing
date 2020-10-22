<?php
trait Car {
    public function arrancar() { echo "Arrancado."; }
}

class MiCoche {
    use Car;
    private $status = "apagado";
    public function arrancar() {
        $this->status = "arrancado";
        Car::arrancar();
    }
}

//$micoche = new MiCoche();
//$micoche->arrancar();

trait Peticion {
    public function mostrarPeticion() {
        $descripcion = 'informal';
        echo "La petición es $descripcion.";
    }
}

class Reivindicacion {
    use Peticion;
    public function mostrarPeticion() {
        $descripcion = 'formal';
        echo "La petición es $descripcion.";
    }
}

$o = new Reivindicacion();
$o->mostrarPeticion();

