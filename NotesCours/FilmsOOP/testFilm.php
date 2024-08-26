<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./classes/Film.php";
    $film1 = new Film(
        [
            'titre' => 'Coco',
            'description' => 'film sur le Mexique',
            'duree' => 100
        ]
    );

    $film1->hydrate([
        'titre' => 'Sharknado',
        'description' => 'film sur les requins qui volent'
    ]);

    var_dump ($film1);

    ?>
</body>

</html>