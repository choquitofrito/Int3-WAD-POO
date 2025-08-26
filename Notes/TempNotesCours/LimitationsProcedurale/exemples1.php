<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "./fonctionsFilm.php";

    $film1 = [
        'titre' => "Robocop",
        'date' => 1988,
        'nationalite' => "USA"
    ];

    $film2 = [
        'titre' => "Rouge",
        'date' => 1992,
        'nationalite' => "France"
    ];

    
    afficher($film1);
    afficher($film2);



    ?>
</body>

</html>