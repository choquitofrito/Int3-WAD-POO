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


    $j1 = new JeuSociete ("Virus", 2, 4);
    $j1->afficher();
    $j2 = new JeuSociete ("Dixit", 2, 5);
    $j2->afficher();
    $j1->jouer();
    $j2->jouer();


    var_dump ($j1);
    var_dump ($j2);



    ?>
</body>

</html>