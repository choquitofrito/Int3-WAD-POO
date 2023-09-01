<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "./fonctionsProduits.php";

    $produit1 = [
        'nom' => "gsm",
        'prix'=> 100
    ];
    $produit2 = [
        'nom' => "téle",
        'prix'=> 200
    ];



    afficher($produit1);
    afficher($produit2);



    ?>
</body>

</html>