<?php
echo "<div id='divPanier'>";
if (isset($_SESSION['panier'])) {
        var_dump($_SESSION['panier']);
}
echo "</div>";

echo "<button id='vider'>Vider Panier</button>";


// 1. Créer une connexion à la BD
include "./connexion/db.php";

try {
        $cnx = new PDO(DSN, USERNAME, PASSWORD);
} catch (Exception $e) {
        // jamais en production car ça montre des infos
        // sensibles
        echo $e->getMessage();

        die();
}
// 2. Créer une requête SQL
// $sql = "SELECT * FROM film";


// ATTENTION: Une requête dans cet esprit ne fonctionnera pas:
// SELECT film.id, titre, description, duree, dateSortie, image, favori.idFilm as idFilmFavori, login FROM film  
// LEFT JOIN favori ON film.id = favori.idFilm LEFT JOIN utilisateur ON utilisateur.id=favori.idUtilisateur 
// WHERE utilisateur.login = :login
// On doit mettre la condition pour l'utilisateur dans la condition de la jointure. Autrement les films qui ne se trouvent 
// pas en favori auront le login a null (bien évidemment, on ne peut pas lier les films et les users)
// voici la solution à ce genre de problèmes: une sous-requête

// Explication: Selectionner tous les films (on veut tous afficher, liked et pas liked).
// joindre les favoris pour savoir qui a été liké (LEFT, pour ne pas perdre les films qui ne se trouvent pas dans les favoris)
// On aura alors tous les films et tous les favoris
// MAIS dans la condition de jointure (ON) on cible l'utilisateur connecté. 
// Quand-même, et car on a fait un LEFT JOIN à partir des films, on a les films qui ne se trouve pas dans favori
$sql = "SELECT film.id as id, film.titre,film.image, favori.idFilm AS idFilmFavori FROM film 
        LEFT JOIN favori ON film.id = favori.idFilm AND favori.idUtilisateur = 
        (SELECT utilisateur.id FROM utilisateur WHERE login = :login)";

// 3. Lancer la requête (préparation et lancement)
$stmt = $cnx->prepare($sql);
$stmt->bindValue(":login", $_SESSION['loginConnecte']);
$stmt->execute();
// 4. Obtenir les données dans un array 
$arrayRes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($arrayRes);
// die();

// 5. Afficher los données selon nos besoins


foreach ($arrayRes as $film) {

        echo '<div class="card" style="width: 10rem;">';
        echo '<a href="./detailFilm.php?id=' . $film['id']  . '"><img class="card-img-top" src="./uploads/'  . $film['image'] .   '" alt="' . $film['titre'] . '"></a>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $film['titre'] . '</h5>';
        echo '</div>';
        echo '</div>';
        if (!is_null($film['idFilmFavori'])) {
                echo "<p class='coeur' data-id ='" . $film['id'] . "'>&#10084;</p>";
        } else {
                echo "<p class='coeur' data-id ='" . $film['id'] . "'>&#10085;</p>";
        }
        echo '<p>Quantité<input data-id="' . $film['id'] . '" type="number"><button class="ajouter" data-id="' . $film['id']  . '">Rajouter</button></p>';
        // echo '<p>Effacer<input data-id="'. $film['id'] . '" type="number"><button class="ajouter" data-id="'. $film['id']  .'">Rajouter</button></p>';

        // accés reservé au ADMIN
        if ($_SESSION['role'] == "ADMIN") {
                echo "<a href ='./effacerFilm.php?id=" . $film['id'] . "'>Effacer</a>&nbsp";
                echo "<a href ='./index.php?p=updateFilm&id=" . $film['id'] . "'>Modifier</a>";
        }
}



echo '<script src="./js/main.js"></script>';
echo '<script src="./js/panier.js"></script>';
