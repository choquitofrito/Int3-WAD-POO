<?php

include "./vendor/autoload.php";

// filtre eventuellement pour éviter hack
$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();
$filmManager = new FilmManager ($cnx);

$arrayFiltres = $_POST; // eventuellent nettoyer l'array (filter, éviter hacks)
$arrayObjetsFilm = $filmManager->findByCustom ($arrayFiltres);

var_dump ($arrayObjetsFilm);
