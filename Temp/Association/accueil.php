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
    include_once "Societe.class.php";
    include_once "Personne.class.php";

    $s = new Societe("Lala", "societé d'evénements");
    $f1 = new Personne ("Mike","234234324");
    $f2 = new Personne ("Lola","234234324");
    $s->addFondateur($f1);
    $s->addFondateur($f2);
    $f1->addSocieteFondee($s);
    $f2->addSocieteFondee($s);



    var_dump ($s);

    ?>
</body>

</html>