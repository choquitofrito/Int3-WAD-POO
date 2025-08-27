<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$titre = "film1";
$duree = 90;
$description = "description film";
$dateSortieObject = new DateTime ("2025-08-27");
$dateSortie = $dateSortieObject->format ("Y-m-d");

// 1. Créer une connexion à la BD
include "./connexion/db.php";
try {
    $cnx = new PDO(DSN, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos
    // sensibles
    echo $e->getMessage();
    die();
}
$sql = "INSERT INTO film (id, titre, duree, description, dateSortie) ";
$sql .= " VALUES (NULL , :titre, :duree, :description, :dateSortie)";

// https://www.php.net/manual/fr/pdo.constants.php
$stmt = $cnx->prepare($sql);

$stmt->bindValue (":titre", $titre);
$stmt->bindValue (":duree", $duree, PDO::PARAM_INT);
$stmt->bindValue (":description", $description);
$stmt->bindValue (":dateSortie", $dateSortie);

$stmt->execute();

var_dump ($stmt->errorInfo());
?>

</body>
</html>
