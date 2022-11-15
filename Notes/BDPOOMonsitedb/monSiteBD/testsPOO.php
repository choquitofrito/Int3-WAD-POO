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
    include "./classes/Film.php";

    $f = new Film (['titre' => 'Coco',
                    'dateSortie' => new DateTime()]);
    
    var_dump($f);

    // code test pour insérer un film
    $cnx = new Connexion();
    $filmManager = new FilmManager($cnx);
    $filmManager->insert ($f);



    ?>
</body>

</html>