<?php
$frutas = ['Pera', 'Manzana' , 'Platano'];

foreach ($frutas as $fruta) {
    echo $fruta . PHP_EOL;
}


for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . PHP_EOL;
}
