<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "./fixtures/FilmFixtures.php";
    include_once "./vendor/autoload.php";

    echo "<h1>Cette page remplira le tableau films de la BD</h1>";

    $ff = new FilmFixtures();
    $ff->lancerFixtures();





    ?>

    
</body>
</html>