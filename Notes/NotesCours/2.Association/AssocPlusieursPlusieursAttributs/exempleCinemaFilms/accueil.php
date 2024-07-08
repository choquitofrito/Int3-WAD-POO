<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./Cinema.php";
    require_once "./Film.php";
    require_once "./Seance.php";

    $f1 = new Film ("Alien", 120);

    $s1 = new Seance(new DateTime());
    $s2 = new Seance(new DateTime("5-9-2023"));
    
    $c1 = new Cinema("Vendome", "vendome@gmail.com");

    // liens
    $f1->addSeance ($s1);
    $f1->addSeance ($s2);
    $c1->addSeance ($s1);
    $c1->addSeance ($s2);

    var_dump ($f1);
    var_dump ($s1);
    var_dump ($s2);
    var_dump ($c1);


    ?>
</body>
</html>