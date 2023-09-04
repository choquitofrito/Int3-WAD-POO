<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "./Repertoire.php";
    include_once "./Contact.php";

    $c1 = new Contact ("García", "Emilie","032423439");
    $c2 = new Contact ("Dupont", "Hsin I", "23423423");
    $c3 = new Contact ("Oliveira", "Vitoria", "23423423");
    
    $r1 = new Repertoire("perso", "Contacts personnels");
    var_dump ($r1);
    $r1->addContact($c1);
    $r1->addContact($c2);
    $r1->addContact($c3);
    var_dump ($r1);

    var_dump ($c1->getRepertoire());






    // var_dump ($c1);




    ?>

</body>

</html>