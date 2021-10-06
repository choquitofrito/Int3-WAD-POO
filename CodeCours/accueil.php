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
    include "./Personne.class.php";
    include "./PersonneC.class.php";
    include "./PersonneNC.class.php";

    // Personne p1 = new Personne(); // java, c#....

    $p1 = new Personne();
    $p1->setNom("Lila");
    $p1->setPrenom("Lula");
    var_dump($p1);

    $p2 = new Personne();
    $p2->setNom("Hermant");
    $p2->setPrenom("Margaret");
    var_dump($p2);

    $p3 = new PersonneC("Bowie","David");
    var_dump ($p3);
    $p4 = new PersonneC();
    var_dump ($p4);

    $p5 = new PersonneNC("Jackson","Michael");
    var_dump ($p5);
    $p6 = new PersonneNC();
    var_dump ($p6);




    
    ?>
</body>

</html>