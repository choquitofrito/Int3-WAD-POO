<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./vendor/autoload.php";

    $c1 = new Contact ("Dupont", "Paco","324234234");
    $r1 = new Repertoire("perso", "personnel");
    var_dump ($c1);
    var_dump ($r1);

    ?>
</body>

</html>