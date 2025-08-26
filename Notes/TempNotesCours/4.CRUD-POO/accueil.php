<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    include "./config/db.php";

    try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASSWORD);
    } catch (Exception $e) {
        // ce code sera lancé s'il y a une erreur de connexion
        echo "Erreur de connexion à la BD";
        die();
    }

    require_once "./Film.php";
    require_once "./FilmManager.php";

    $f1 = new Film("Alien", 120);
    $f2 = new Film("Tron", 130);
    $filmManager = new FilmManager($cnx);
    $filmManager->insert($f1);
    $filmManager->insert($f2);

    
    // chrercher un film par titre
    $filmsTrouves = $filmManager->select();





    ?>


</body>

</html>