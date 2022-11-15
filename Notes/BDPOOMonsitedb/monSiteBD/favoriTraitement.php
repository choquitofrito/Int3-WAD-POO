<?php
session_start();

include "./connexion/db.php";

try {
    $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASS);
} catch (Exception $e) {
    // jamais en production car ça montre des infos sensibles
    // echo $e->getMessage();
    die();
}


$idFilm = $_POST['id'];
$login = $_SESSION['loginConnecte'];

// obtenir l'id d'utilisateur pour éviter les jointures
$sql = "SELECT * FROM utilisateur WHERE login = :login";
$stmt = $cnx->prepare($sql);
$stmt->bindValue(':login', $login);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$idUtilisateur = $result[0]['id'];

// regarder si le film a été liké
$sql = "SELECT * FROM favori 
         WHERE favori.idFilm = :idFilm
         AND favori.idUtilisateur = :idUtilisateur";
$stmt = $cnx->prepare($sql);
$stmt->bindValue(":idFilm", $idFilm);
$stmt->bindValue(":idUtilisateur", $idUtilisateur);
$stmt->execute();

$resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);


$reponse = "";

// si le film a été liké, il faut le deliker
if (count($resultat) > 0) {
    // on supprime le lien
    $sql = "DELETE FROM favori
    WHERE idFilm = :idFilm
    AND idUtilisateur = :idUtilisateur";

    $stmt = $cnx->prepare($sql);
    $stmt->bindValue("idFilm", $idFilm);
    $stmt->bindValue("idUtilisateur", $idUtilisateur);
    $stmt->execute();

    // créer réponse pour le client
    $reponse = ["statut" => "off"];
} else {
    // on rajoute dans les favoris
    $sql = "INSERT INTO favori
    (id, idFilm, idUtilisateur)
    VALUES
    (null, :idFilm, :idUtilisateur)";

    $stmt = $cnx->prepare($sql);
    $stmt->bindValue("idFilm", $idFilm);
    $stmt->bindValue("idUtilisateur", $idUtilisateur);
    $stmt->execute();

    // créer réponse pour le client
    $reponse = ["statut" => "on"];
}
echo json_encode($reponse);
