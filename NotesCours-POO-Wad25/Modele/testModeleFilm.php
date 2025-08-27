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
    


    $filmManager = new FilmManager();

    $film1 = new Film (null, "Titanic", 120, "un film marin", new DateTime ("1997-1-1"), null);
    $film2 = new Film (null, "Spiderman", 100, "super héro", new DateTime ("2000-1-1"), null);
    
    $filmManager->insert ($film1);
    $filmManager->insert ($film2);

    
    var_dump ($film1);
    ?>
</body>
</html>