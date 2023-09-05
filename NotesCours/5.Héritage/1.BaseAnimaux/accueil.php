<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./Animal.php";
    require_once "./Chien.php";

    $c1 = new Chien("Tasio", true);
    $c2 = new Chien("Laika", false);
    
    $c1->jouer();
    $c1->aboyer();

    var_dump ($c1);
    var_dump ($c2);


    ?>
</body>

</html>