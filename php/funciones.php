<?php

function suma(int $a, int $b) {
    echo "El resultado es:" . ($a + $b) . PHP_EOL;
    //echo $a + $b;
}
//suma(3, '3');
//suma(3, 3);

// Funcion anonima
$anonfunc = function($str) {
    echo "Hello " . $str . PHP_EOL;
};
$anonfunc('World!'); // Llamada a funcion anonima

// Funciona anonima aplicada a un array
// array_map — Aplica la retrollamada a los elementos de los arrays dados
// array_map() devuelve un array que contiene todos los elementos 
// de array1 después de haber aplicado la función callback a cada uno de ellos.
$myArray = array_map(function($fruta) {
    return strtoupper($fruta);
} , array("Pera", "Manzana", "Limon"));
print_r($myArray); // PERA, MANZANA, LIMON

// Funciones de flecha
$myArray = array_map(fn($fruta) => strtoupper($fruta) , array("Pera", "Manzana", "Limon"));
print_r($myArray); // PERA, MANZANA, LIMON

// Funciones de flecha equivalente a una funcion anonimas
// Solo permiten una sentencia
$y = 1;
$fn1 = fn($x) => $x + $y;
$fn1(3);

// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
$fn2(3); // 3 + 1

// Tipo de valor de retorno float
function sum2($a, $b): float {
    return $a + $b;
}

// echo sum2(3, 6);
// Devuelve un array
function bar(): iterable {
    return [1, 2, 3];
}

// Require parametros int y devuelve int
function test(int ...$vals) : int {
    return array_sum($vals);
}
echo test(1,1,1,1); // 4
