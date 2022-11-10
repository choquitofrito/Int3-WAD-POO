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
    
        include "./LecteurDVDH.class.php";
        include "./LecteurGraveurDVDH.class.php";
        $l1 = new LecteurDVDH("Hitachi",600);
        $e1 = new LecteurGraveurDVDH("Sony",600,400);
        $l1->lireDVD();
        $e1->lireDVD();
        $e1->enregistrerDVD();
        var_dump($l1);
        var_dump($e1);

    ?>
</body>

</html>