<?php
/*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

class GlobalsDemo {
    public function demo1() {
        echo $_SERVER['SERVER_NAME'];
    }
}

$ademo = new GlobalsDemo();
$ademo->demo1();
