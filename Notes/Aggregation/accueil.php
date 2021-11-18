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
    include_once "./vendor/autoload.php";
    $c1 = new Contact("De Decken", "Julie");
    $c2 = new Contact("Hughes", "Laure");
    // var_dump ($c1);
    $r1 = new Repertoire("repertoire GSM");
    // var_dump ($r1);

    $r1->addContact ($c1);
    $r1->addContact ($c2);
    // var_dump ($r1);

    $r1->afficher();

    // $repManager = new RepertoireManager($bdd);
    // $repManager->insert ($r1);



    ?>
</body>

</html>