<?php
$fecha = new DateTime('2000-01-01');
$fecha2 = new DateTime('2020-01-01');

$fecha->add(new DateInterval('P10D'));
echo $fecha->format('Y-m-d') . "\n";


$interval = $fecha->diff($fecha2);
echo $interval->format('%R%a días');

