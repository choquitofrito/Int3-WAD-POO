<?php

include_once "./vendor/autoload.php";

// obtenir la connexion
$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();

// obtenir l'id du film à effacer
$idFilm = $_GET['id'];

// connecter à la BD et lancer le delete
$filmManager = new FilmManager($cnx);
$filmManager->delete($filmManager->find($idFilm));

// aller vers la liste
header ('location: ./index.php?p=listeFilms');