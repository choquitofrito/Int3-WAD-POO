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
    
        include "./LecteurDVD.class.php";
        include "./LecteurGraveurDVD.class.php";
        $l1 = new LecteurDVD("Hitachi",600);
        $e1 = new LecteurGraveurDVD("Sony",600,400);
        $l1->lireDVD();
        $e1->lireDVD();
        $e1->enregistrerDVD();
        var_dump($l1);
        var_dump($e1);

    ?>
</body>

</html>