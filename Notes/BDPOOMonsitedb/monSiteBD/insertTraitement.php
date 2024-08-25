<?php

// 1. Obtenir la connexion
include "./vendor/autoload.php";
$objectConnexion = new Connexion();
$cnx = Connexion::getPdo();

// 2. Obtenir les données du formulaire
$data = $_POST;


// il faut traiter l'upload et stocker le nom du fichier dans l'objet

// 1. Créer un nom unique pour le fichier
$dossier = "./uploads";
$nomFichier = uniqid() . date("h-i-s") .
    $_FILES['image']['name'];

// nom complet du fichier, précedé du nom du dossier
$cheminComplet = $dossier . "/" . $nomFichier;

// stocker le nom dans l'objet
// var_dump ($_POST);
$film1 = new Film($_POST['titre'], $_POST['duree'], $_POST['description'], new DateTime($_POST['dateSortie']),$nomFichier);

// 2. Deplacer le fichier temporaire et lui donner
// le nom choisi
move_uploaded_file($_FILES['image']['tmp_name'], $cheminComplet);


// 3. Insérer dans la BD en utilisant un Manager
$filmManager = new FilmManager($cnx);
$filmManager->insert($film1);

// header("location: ./index.php?p=listeFilms");
