<?php
$a = 2; 
$b = 2;
$c = 4;
//echo $a ** $b; // Exponente 
//echo $a % $b; // Resto de la division
//echo $a > 4 ? "Hello" : "World";

// if ($a == $b) echo true; // Mismo valor
// if ($a === $b) echo true; // Mismo valor y tipo
// if ($a <> $b) echo true; // No son iguales. <> o !=


// <=>
$x = 5; $y = 10;
//echo ($x <=> $y); // returns -1 because $x is less than $y

$x = 10; $y = 10;
//echo ($x <=> $y); // returns 0 because values are equal

$x = 15; $y = 10;
//echo ($x <=> $y); // returns 1 because $x is greater than $y

$sx = 3;
echo ++$sx;// 4
echo $sx++; // 4
echo $sx; // 5

// XOR True if either $x or $y is true, but not both
// if (5 == 5 xor 5 == 9) echo "Hello world!"; 
// variable $color is "red" if $color does not exist or is null
// echo $color = $color ?? "red";

