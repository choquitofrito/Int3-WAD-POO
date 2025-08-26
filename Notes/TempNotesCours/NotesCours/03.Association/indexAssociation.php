<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "./Personne.php";
    include_once "./Societe.php";
    
    $p = new Personne ("George", "george@gmail.com");
    $p2 = new Personne ("Lucas", "lucas@gmail.com");
    $s = new Societe("The Coca Cola Company", "A Street, 9900");

    // rajouter un employé à la societé
    $s->addEmploye ($p);
    // $p->setEmployeur($s);
    
    $s->addEmploye ($p2);

    // $p2->setEmployeur($s);
    
    $s->removeEmploye($p2);
    var_dump ($s);
    die();

    // $p3 = $p2; // copie de la référence
    // $p3 = clone ($p2);


    $p3->nom = "Autrenom";
    var_dump ($p3);
    
    // var_dump ($p2);
    
    // var_dump ($p);
    // var_dump ($s);

    
    ?>

    
</body>
</html>