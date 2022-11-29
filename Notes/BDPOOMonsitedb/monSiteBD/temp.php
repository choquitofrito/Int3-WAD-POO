<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // afficher tous les détails d'un film dans un div
    include "./vendor/autoload.php";

    // filtre eventuellement pour éviter hack
    $objetConnexion = new Connexion();
    $cnx = Connexion::getPdo();
    $filmManager = new FilmManager ($cnx);

    $film = $filmManager->find ($_GET['id']);

    echo '<div class="card" style="width: 10rem;">';
    echo '<div class="card-body">';

    echo '<h5 class="card-title">' . $film->getTitre() . '</h5>';
    echo '<img class="card-img-top" src="./img/'  . $film->getImage() .   '" alt="' . $film->getTitre() . '">';
    echo '<p class="card-text">Durée: ' . $film->getDuree() .  "m. <br> Sortie: " . $film->getDateSortie()->format ("y-m-d") . "<br>Description: " . $film->getDescription() ."</p>";
    echo '</div>';

    echo "Cotez ce film: <input name='cotation'>"; // Gérez avec AJAX et un plugin d'étoiles (par exemple)

    ?>
</body>
</html>