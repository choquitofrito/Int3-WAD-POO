<?php


// Ou, en utilisant une fonction anonyme à partir de PHP 5.3.0
$monAutoload = function ($class) {
    include './classes/' . $class . '.php';
};
spl_autoload_register($monAutoload);