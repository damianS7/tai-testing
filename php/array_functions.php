<?php

$frutas = ['Pera', 'Manzana', 'Platano', 'Cereza'];
$arr = ['Pera', 'Manzana', 'Platano', 'Cereza'];
$arr2 = ['Mandarina', 'Pomelo', 'Pera'];
$arr3 = ['first' => 'David'];
$user_list = ['david', 'robert'];

// echo count($arr) . PHP_EOL; // Cuenta los elementos de una array
// sizeof — Alias de count()

// sort — Ordena un array
// rsort — Ordena un array en orden inverso


// shuffle — Mezcla un array
shuffle($arr);
// print_r($arr);


// array_chunk — Divide un array en fragmentos
$chunks = array_chunk($arr, 2) ;
// print_r( $chunks );


// array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
// print_r( array_combine($chunks[0], $chunks[1]) );


// array_diff — Calcula la diferencia entre arrays
// print_r( array_diff( $arr, $arr2) );


// array_intersect — Calcula la intersección de arrays, es decir los elementos comunes en ambos arrays
// print_r( array_intersect( $arr, $arr2) );


// array_filter — Filtra elementos de un array usando una función de devolución de llamada


// array_key_exists — Verifica si el índice o clave dada existe en el array
// if (array_key_exists('first', $arr3)) echo "first key exists";

// in_array — Comprueba si un valor existe en un array
// if (in_array('Manzana', $arr)) echo "Manzana existe";


// array_merge — Combina dos o más arrays
//print_r( array_merge($arr, $arr2) );


// array_map — Aplica la retrollamada a los elementos de los arrays dados
function cube($n) {
    return($n * $n * $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
//print_r($b);

$frutasEnMayusculas = array_map( fn($fruta) => strtoupper($fruta), $frutas) );



// array_search — Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito
$key = array_search('david', $user_list);
//print_r ($key);


// array_pad — Rellena un array a la longitud especificada con un valor
$result = array_pad($arr, 5, 0); // el resultado es array(12, 10, 9, 0, 0)

// array_unique — Elimina valores duplicados de un array
// array_values — Devuelve todos los valores de un array
// array_reverse — Devuelve un array con los elementos en orden inverso
// array_slice — Extraer una parte de un array
// array_shift — Quita un elemento del principio del array
// array_pop — Extrae el último elemento del final del array
// echo array_pop ($arr);


// array_sum — Calcular la suma de los valores de un array
// array_push — Inserta uno o más elementos al final de un array
// array_push($arr, 'Banana');


// array_rand — Seleccionar una o más claves aleatorias de un array
// print_r( $arr[array_rand($arr)] );


// array_replace — Reemplaza los elementos del array original con elementos de array adicionales


// in_array — Comprueba si un valor existe en un array
// if(in_array('Pera', $arr)) echo "Pera encontrado";
