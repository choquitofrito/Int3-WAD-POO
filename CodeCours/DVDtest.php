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
        include_once "LecteurDVD.class.php";
        include_once "LecteurGraveurDVD.class.php";

        echo "<br>On va faire un test";
        $lecteur = new LecteurDVD("Sony",1000);
        var_dump ($lecteur);
        $graveur = new LecteurGraveurDVD("Hitachi",1000,2000);
        var_dump ($graveur);
        $lecteur->lireDVD();
        $graveur->lireDVD();
        $graveur->graver();
        // var_dump ($lecteur->vitesseLecture);


    ?>
</body>
</html>