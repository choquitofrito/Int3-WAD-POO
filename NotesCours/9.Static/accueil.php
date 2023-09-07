<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./Medecin.php";

    $m1 = new Medecin ();

    var_dump ($m1);

    print (Medecin::getSerment());
    
    Medecin::setSerment ("Soigner");
    print ("<br>". Medecin::getSerment());
    
    $m2 = new Medecin ("324234", "Dorine");
    print ("<br>". Medecin::getSerment());
    



    ?>
</body>

</html>