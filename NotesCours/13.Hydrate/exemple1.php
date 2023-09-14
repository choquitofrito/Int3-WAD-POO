<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./JeuSociete.php";
    include "./Personne.php";
    include "./Film.php";

    $j1 = new JeuSociete ("Virus", 2, 4);
    $j1->afficher();
    $j2 = new JeuSociete ("Dixit", 2, 5);
    $j2->afficher();
    $j1->jouer();
    $j2->jouer();

    // $film1 = new Film ("Matrix", 150, 10);
    // $film1->afficher();
    // print ("<br>Le titre du film1 est: " . $film1->getTitre());
    // $film1->setTitre("The green butcher");
    // $film1->setPrix(-100);


    // création de FilmH

    include "./FilmH.php";
    $film2 = new FilmH (["titre" => "Matrix",
                        "prix" => 180,
                        "duree" => 10]);
    var_dump ($film2);
    $film2->hydrate (['duree' => 99,
                    'titre' => 'Motrix']);
    $film2->setDuree (99);
    var_dump ($film2);







    ?>
</body>

</html>