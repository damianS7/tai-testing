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

// $anonfunc('World!'); // Llamada a funcion anonima



// Funciones de flecha equivalente a las funciones anonimas
$y = 1;
$fn1 = fn($x) => $x + $y;
//$fn1(3);

// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
//$fn2(3); // 3 + 1

// Tipo de valor de retorno float
function sum2($a, $b): float {
    return $a + $b;
}

// echo sum2(3, 6);

function bar(): iterable {
    return [1, 2, 3];
}

