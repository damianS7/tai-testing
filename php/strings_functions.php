<?php

$str1 = "Hello world";
$str2 = "$str1, my friend ";
//echo strlen($str1) . PHP_EOL; // Cuenta el num de caracteres de una cadena
//echo $str2 . PHP_EOL; 
//echo trim($str2); // Elimina espacios por delante y por detras. Tambien existe ltrim (left) y rtrim (right)
// echo chop($str2); // Alias de trim

// sprintf
$num = 5;
$ubicación = 'árbol';
$formato = 'Hay %d monos en el %s'; // %d = digit y %s = string
// echo sprintf($formato, $num, $ubicación) . PHP_EOL;

// explode: Devuelve un array con las palabras de una cadena, necesita especificar un separador.
$expl = explode(" ", $str2); // $expl contiene un array
// echo $expl[2];

// implode: Realiza la operacion inversa de explode
// echo implode(" " , $expl); 
// echo join(" " , $expl); // join es un alias de implode


// lcfirst — Pasa a minúscula el primer caracter de un string
// echo lcfirst($str1); // hello world

//nl2br — Inserta saltos de línea HTML antes de todas las nuevas líneas de un string

// parse_str — Convierte el string en variables
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
// echo $first;  // value


// str_pad — Rellena un string hasta una longitud determinada con otro string
//echo str_pad("Alien", 10, "_");  // produce "Alien___"


// str_repeat — Repite un string
//echo str_repeat("-=", 10); // -=-=-=-=-=-=-=-=-=-=


// str_replace — Reemplaza todas las apariciones del string buscado con el string de reemplazo
// echo str_replace("world", "world!", $str2);


// str_shuffle — Reordena aleatoriamente una cadena. shuffle hace lo mismo para arrays
// echo str_shuffle($str2); 


// str_split — Convierte un string en un array
// print_r( str_split($str2, 3) );

// str_word_count — Devuelve información sobre las palabras utilizadas en un string 

// strstr — Encuentra la primera aparición de un string
// strchr — Alias de strstr()
// echo strstr($str2, "world");


// strcmp — Comparación de string segura a nivel binario
// strcasecmp — Comparación de string segura a nivel binario e insensible a mayúsculas y minúsculas
// echo strcmp("HOLA", "HOLA"); //  Devuelve <0 si str1 es menor que str2; >0 si str1 es mayor que str2 y 0 si son iguales. 


// strpos — Encuentra la posición de la primera aparición en un string. stripos no considera mayúsculas/minúsculas
// echo strpos ("world", $str2); // Devuele true o false


// strtolower — Convierte un string a minúsculas y strtoupper


// substr — Devuelve parte de una cadena
echo substr($str2, 0, 5);

