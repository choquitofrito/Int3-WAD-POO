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

use Personne as GlobalPersonne;

    class Personne
    {
        public function __construct(public string $nom, public string $adresse)
        {
        }
    }

    $a = 3;
    $b = $a;
    $a = 27;
    var_dump ($a);
    var_dump ($b);


    $p1 = new Personne ("Lola", "Rue AA");
    var_dump ($p1);
    $p2 = $p1;
    var_dump ($p2);
    $p1->nom = "Toto";
    var_dump ($p2);
    unset ($p1);
    var_dump ($p2);

    $p3 = new Personne ("Nana", "Rue Verte");
    $p4 = &$p3;
    $p3->nom = "Pepe";

    var_dump ($p4);
    $p3  = null;
    var_dump ($p4);

    $p1 = clone $p2;


    // $r1 = new Repertoire();
    // $r2 = clone $r1;

    ?>

</body>

</html>