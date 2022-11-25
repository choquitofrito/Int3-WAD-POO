<?php

include_once "./vendor/autoload.php";

// obtenir la connexion
$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();


$filmManager = new FilmManager($cnx);

$film = new Film ($_POST);
$filmManager->update($film);

header ("location: ./index.php?p=listeFilms");
