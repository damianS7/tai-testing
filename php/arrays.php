<?php
# Comment
// comment
/* comment */
//$array = ['Pera', 'Manzana', 'Platano'];
//array_push($frutas, 'Cereza');
//array_chunk
// explode
// impolode
// split
// array_

class ArrayDemo {
    // Union de arrays mediante +
    public function demo1() {
        $x = array("a" => "red", "b" => "green");  
        $y = array("c" => "blue", "d" => "yellow");  
        $z = $x + $y; // Es lo mismo que array_merge($x, $y);
        print_r($zz);
    }
    
    public function demo2() {
        $frutas = array('Pera', 'Manzana', 'Platano');
        // echo count($frutas); // Numeros de elementos del array frutas
        
        $ids = ["Peter" => 81, "David" => 71, "Ronald" => 87];
        echo $ids["Peter"];
        
        //asort($ids); // sort associative arrays in ascending order, according to the value
        //ksort($ids); // sort associative arrays in ascending order, according to the key
        //arsort($ids); // sort associative arrays in descending order, according to the value
        krsort($ids); // sort associative arrays in descending order, according to the key
        print_r($ids);
    }
    
    public function demo3() {
        $frutas = array('Pera', 'Manzana', 'Platano', 'Cereza', 'Pomelo');
        //sort($frutas); // Orden ascendente
        //rsort($frutas); // Orden descendente
        
        print_r($frutas);        
    }
}

$ademo = new ArrayDemo();
$ademo->demo2();
