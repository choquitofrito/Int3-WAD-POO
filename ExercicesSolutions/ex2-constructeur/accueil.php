<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    img {
        width:50px;
    }

    </style>
</head>

<body>
    <?php
        include "./Image.php";
        $im1 = new Image("./images/toto.webp", "image de Toto");
        $im1->afficher();

        
    ?>
</body>

</html>