<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include './classes/Medecin.php';
    $m1 = new Medecin('Emilie');
    $m2 = new Medecin('Laura');

    echo Medecin::getCodeDeontologique();
    Medecin::setCodeDeontologique('Manger de frites');
    echo Medecin::getCodeDeontologique();
    var_dump($m1);
    var_dump($m2);

    ?>
    
</body>
</html>