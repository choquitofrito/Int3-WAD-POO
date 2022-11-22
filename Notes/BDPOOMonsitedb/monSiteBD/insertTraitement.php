<?php

// 1. Obtenir la connexion
include "./vendor/autoload.php";
$objectConnexion = new Connexion();
$cnx = Connexion::getPdo();

// 2. Obtenir les données du formulaire
$data = $_POST;
$film1 = new Film($data);


// 3. Insérer dans la BD en utilisant un Manager
$filmManager = new FilmManager($cnx);
$filmManager->insert($film1);

header("location: ./index.php?p=listeFilms");
