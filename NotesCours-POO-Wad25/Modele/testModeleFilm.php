<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Cette page est capable d'insérer un film dans la BD
    <?php

    require_once './classes/Film.php';
    require_once './classes/FilmManager.php';
    include './connexion/db.php';

    try {
        $cnx = new PDO(DSN, DBUSER, DBPASS);
    } catch (Exception $e) {
        // jamais en production car ça montre des infos
        // sensibles
        echo $e->getMessage();
        die();
    }

    $filmManager = new FilmManager($cnx);

    $film1 = new Film('Titanic', 120, 'un film marin', new DateTime('1997-1-1'), "");
    $film2 = new Film('Spiderman', 100, 'super héro', new DateTime('2000-1-1'), "");

    // $filmManager->insert($film1);
    // $filmManager->insert($film2);

    // $filmManager->delete($film1);

    $films = $filmManager->select([
            'titre'=> 'Spiderman',
            'duree'=> 100
    ]);
    var_dump ($films);

    // var_dump($film1);
    // var_dump($film2);

    ?>
</body>
</html>