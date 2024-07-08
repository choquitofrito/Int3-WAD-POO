<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    // $image1 = new Image ("chat1.jpg");
    // $image1->afficher();

    include "./Image.php";

    $liens = ['chat1.jpg','chien.jpg','poisson.jpg'];
    foreach ($liens as $lien){
        // $objImage = new Image ($lien);
        // $objImage->afficher();

        (new Image($lien))->afficher();
    }

?>
    
</body>
</html>