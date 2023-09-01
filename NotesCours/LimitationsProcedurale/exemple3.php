<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Cette page utilisera de produits et de films -->
    <?php
    include "./fonctionsFilm.php";
    include "./fonctionsProduits.php";

    
    $film1 = [
        'titre' => "Robocop",
        'date' => 1988,
        'nationalite' => "USA"
    ];

    afficher($film1);
    

    ?>

</body>

</html>