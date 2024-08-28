<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./Medecin.php";

    $m1 = new Medecin("Dupont", "dupont@gmail.com");

    $m2 = new Medecin("Dupont", "dupont@gmail.com");

    // Medecin::setCodeDeontologique("mal agir");
    Medecin::setCodeDeontologique("bien agir");
    
    // Medecin::$codeDeontologique = "soigner";

    var_dump(Medecin::getCodeDeontologique());

    $m1->setCodeDeontologique("coco");
    var_dump(Medecin::getCodeDeontologique());


    var_dump ($m1);
    var_dump ($m2);
    ?>
</body>
</html>