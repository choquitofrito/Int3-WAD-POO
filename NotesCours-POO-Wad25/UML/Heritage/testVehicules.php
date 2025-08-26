<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./classes/Vehicule.php";
    require_once "./classes/Voiture.php";
    require_once "./classes/Avion.php";

    $a1 = new Avion ("Boeing", 350, "Air France");
    $v1 = new Voiture ("Renault", 120, 5);
    $a1->voler();
    $v1->rouler();


    ?>
</body>
</html>