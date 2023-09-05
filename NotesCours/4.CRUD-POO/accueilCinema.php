<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // connexion
    require_once "./config/db.php";
    try {
        $cnx = new PDO(DBDRIVER . ':host=' . DBHOST . ';port=' . DBPORT . ';dbname=' . DBNAME . ';charset=' . DBCHARSET, DBUSER, DBPASSWORD);
    } catch (Exception $e) {
        // ce code sera lancé s'il y a une erreur de connexion
        echo "Erreur de connexion à la BD";
        die();
    }


    require_once "./Cinema.php";
    require_once "./CinemaManager.php";

    $c1 = new Cinema("Styx", "styx@gmail.com");
    $c2 = new Cinema("Toison d'or", "toisiondor@gmail.com");

    // le but final
    $cm = new CinemaManager($cnx);
    $cm->insert($c1);
    $cm->insert($c2);

    $cm->delete($c1);
    





    ?>
</body>

</html>