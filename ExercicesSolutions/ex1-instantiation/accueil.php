<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./Compte.php";

    $compte = new Compte ("BE2342-3423-3434", 10000);
    var_dump ($compte);
    $compte->rajouterMontant(20000);
    var_dump ($compte);
    $compte->retirerMontant(10000);
    var_dump ($compte);
    $compte->retirerMontant(50000);
    var_dump ($compte);



    ?>

</body>

</html>