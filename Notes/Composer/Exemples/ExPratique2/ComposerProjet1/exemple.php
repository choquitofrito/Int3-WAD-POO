<?php


require "./vendor/autoload.php";

// importer les namespaces
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// créer un log (ici un fichier dans le disque)
$objectLogger = new Logger('monLogger');
$objectLogger->pushHandler(new StreamHandler('monLogConnexions.log', Logger::INFO));

// écrire de messages
$objectLogger->info("User xxxxx connecté");
$objectLogger->err('Mauvais password');

