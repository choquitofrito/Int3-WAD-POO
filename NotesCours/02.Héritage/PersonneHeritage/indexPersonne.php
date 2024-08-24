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
    include_once "./Medecin.php";
    include_once "./Patient.php";

    // var_dump (new Personne("Marc","marc@gmail.com","Rue de la Patate"));


    $medecin1 = new Medecin(
        "Dorothée",
        "dor@gmail.com",
        "Rue de la Paix",
        "234234234234",
        "chirurgienne"
    );

    var_dump($medecin1);


    $patient1 = new Patient(
        "Louise",
        "louise@gmail.com",
        "Rue de la Paix",
        new DateTime()
    );

    var_dump($patient1);
    
    $patient1->afficher();
    $medecin1->afficher();

    ?>
</body>

</html>