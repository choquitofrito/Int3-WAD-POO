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
// 2. Créer une requête SQL
$sql = "SELECT * FROM film";

// 3. Lancer la requête (préparation et lancement)
$stmt = $cnx->prepare($sql);
$stmt->execute();


// 4. Obtenir les données dans un array 
$arrayRes = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump ($arrayRes);

// 5. Afficher los données selon nos besoins
foreach ($arrayRes as $film) {
        echo "<br>";
        foreach ($film as $cle => $val) {
                echo $cle . " : " . $val . "<br>";
        }
        echo "<a href ='./effacerFilm.php?id=" . $film['id'] . "'>Effacer</a>&nbsp";
        echo "<a href ='./index.php?p=updateFilm&id=" . $film['id'] . "'>Modifier</a>";
        echo '<jsuites-rating data-id=' . $film['id'] . ' value="4" tooltip="Ugly, Bad, Average, Good, Outstanding"></jsuites-rating>';
}

?>
<script src="https://jsuites.net/v4/jsuites.js"></script>
<script src="https://jsuites.net/v4/jsuites.webcomponents.js"></script>
<link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />

<script>
        var filmsRatingsValues = document.querySelectorAll("jsuites-rating");

        filmsRatingsValues.forEach((elem) => {
                elem.addEventListener("onchange", (event) => {
                        console.log(event.target.value);
                        console.log (event.target.dataset.id);
                });

        });
</script>