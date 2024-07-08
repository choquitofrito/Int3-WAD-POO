<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./Serie.class.php";
    $s = new Serie ("Coucou", 5);
    var_dump ($s->getTitre());
    $s->setTitre("Clicli");
    var_dump ($s->getTitre());

    $s->setTitre("Clacla")->setNombreSaisons(8);
    var_dump ($s);


    ?>
</body>

</html>