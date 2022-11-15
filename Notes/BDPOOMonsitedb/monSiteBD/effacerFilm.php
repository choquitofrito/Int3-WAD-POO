<?php

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

$id = $_GET['id']; // param dans l'url
$sql = "DELETE FROM film WHERE :id = id";
$stmt = $cnx->prepare($sql);
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$stmt->execute();
// var_dump ($stmt->errorInfo());


// une fois qu'on sait que la page fonctionne!
header ('location: ./index.php?p=listeFilms');