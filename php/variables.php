<?php
define('JK', 7777);
$a = 3;
$b = 8;

// Scope global
function test() {
    global $a, $b;
    $b = 81;
    echo $a;
}

// Paso de variables por referencia
function test2(&$x) {
    $x++;
}

// Variable permamente
function staticTest() {
  static $x = 0;
  echo $x . PHP_EOL;
  $x++;
}

staticTest();
staticTest();
staticTest();

// Globals
$GLOBALS['a'] = 22;
echo $a . PHP_EOL;

test2($b);
echo $b . PHP_EOL;

echo JK;
