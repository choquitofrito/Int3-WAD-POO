<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <?php

    include "./classes/Voiture.php";
    include "./classes/Chaussure.php";


    $voiture1 = new Voiture("Mercedes", "Classe A", 250);
    $voiture2 = new Voiture("BMW", "M5", 300);
    


    $chaussure1 = new Chaussure();
    $chaussure1->marque = "Nike";
    

    var_dump ($voiture1);
    var_dump ($voiture2);
    var_dump ($chaussure1);

    // echo "<br>La marque de la voiture 1: " . $voiture1->marque;

    $voiture1->afficher();
    $voiture2->afficher();





    ?>


</body>
</html>