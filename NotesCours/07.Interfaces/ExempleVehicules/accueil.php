<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./Vehicule.php";
    include "./IRoulant.php";
    include "./Camion.php";

    use ExempleVehicules\Camion;

    $camion1 = new Camion();
    $camion1->rouler();
    $camion1->claxoner();


    ?>
</body>
</html>