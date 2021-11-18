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
    include "./vendor/autoload.php";
    $m1 = new Medecin("Lola");
    $m2 = new Medecin("Marie");
    $m1->afficher();
    $m2->afficher();

    // si public : 
    // Medecin::$codeDeo = "Soigner tout le monde";
    // echo Medecin::$codeDeo;
        
    // si private, besoin de get et set
    Medecin::setCodeDeo ("Vaccinez vous je dis!");
    echo "<br>Le code deontologique est: ";
    echo Medecin::getCodeDeo();
    


    

?>
</body>
</html>