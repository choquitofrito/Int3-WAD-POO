<?php

include "./vendor/autoload.php";

// filtre eventuellement pour éviter hack
$objetConnexion = new Connexion();
$cnx = Connexion::getPdo();
$filmManager = new FilmManager ($cnx);

$titre = $_POST ['titre'];

$resultat = $filmManager->findByTitre($titre); // un array contenant des objets

if (count($resultat) > 0) {
    foreach ($resultat as $film) {
        echo "<br>Titre: " . $film->getTitre();
        echo "<br>Date de sortie: " . $film->getDateSortie()->format('y-m-d');
        // etc...
    }
} else {
    echo "<h5>On n'a pas trouve de films</h5>";
}
echo "<br><br>";

var_dump ($filmManager->find (8));

