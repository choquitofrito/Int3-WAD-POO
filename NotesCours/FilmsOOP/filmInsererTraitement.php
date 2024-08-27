<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "./vendor/autoload.php";

 

    // 1. Obtenir les données du form
    $titre = $_POST['titre'];
    $duree = $_POST['duree'];
    $description = $_POST['description'];
    $dateSortie = new DateTime ($_POST['dateSortie']);

    $film = new Film(['titre' => $titre,
                    'duree' => $duree,
                    'description' => $description,
                    'dateSortie' => $dateSortie,
                    'image' => ""]);

    $fm = new FilmManager();


    // 2. Faire un insert du film avec le FilmManager
    $fm->insert($film);

    ?>
</body>
</html>