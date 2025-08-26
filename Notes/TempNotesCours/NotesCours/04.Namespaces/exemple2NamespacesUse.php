<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./classes/Film.php";
    include "./classes/User.php";
    include "./classes/ExternalFilms/Film.php";

    use Media\Elements\Film as FilmBase;
    use JennyFilm\Filming\Film as FilmJenny;

    $film1 = new FilmBase(
        [
            'titre' => 'Coco',
            'description' => 'film sur le Mexique',
            'duree' => 100,
            'dateSortie' => new DateTime(),
            'image' => ""
        ]
    );

    $filmExt = new FilmJenny ();

    $film2 = new FilmBase(
        [
            'titre' => 'Coco',
            'description' => 'film sur le Mexique',
            'duree' => 100,
            'dateSortie' => new DateTime(),
            'image' => ""
        ]
    );


    $film3 = new FilmBase(
        [
            'titre' => 'Coco',
            'description' => 'film sur le Mexique',
            'duree' => 100,
            'dateSortie' => new DateTime(),
            'image' => ""
        ]
    );

    $film4 = new FilmBase(
        [
            'titre' => 'Coco',
            'description' => 'film sur le Mexique',
            'duree' => 100,
            'dateSortie' => new DateTime(),
            'image' => ""
        ]
    );


    var_dump ($film1);

    ?>

</body>
</html>