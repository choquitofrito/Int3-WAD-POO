<?php

// debug!
var_dump ($_POST);
var_dump ($_FILES);

// Choisir un dossier pour le fichier
$uploadDossier = "./img";
// On essaie de générer un nom de fichier unique
$idUnique = uniqid().date ("Y-m-d-H-i-s");
// Créer le nom du fichier
$nomFichier= $idUnique.basename ($_FILES['image']['name']);

// Déplacer le fichier du dossier tmp du serveur vers un dossier réel
if (! move_uploaded_file($_FILES['image']['tmp_name'], $uploadDossier."/".$nomFichier)){
    throw new Exception ("Problème d'upload");
}



// 1. Créer une connexion à la BD
include "./connexion/db.php";

try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles
    echo $e->getMessage();

    die();
}

$sql = "INSERT INTO film (id, titre, duree, description, dateSortie, image) ";
$sql .= " VALUES (NULL , :titre, :duree, :description, :dateSortie, :image)";

// https://www.php.net/manual/fr/pdo.constants.php
$stmt = $cnx->prepare($sql);

$stmt->bindValue (":titre", $_POST['titre']);
$stmt->bindValue (":duree", $_POST['duree'], PDO::PARAM_INT);
$stmt->bindValue (":description", $_POST['description']);
$stmt->bindValue (":dateSortie", $_POST['dateSortie']);
$stmt->bindValue (":image", $nomFichier);

$stmt->execute();
// var_dump ($stmt->errorInfo());

header ("location: ./index.php?p=listeFilms");

