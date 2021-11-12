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
        $local = new Local("WAD");

        $o1 = new Ordinateur("O27","DELL");
        $local->addOrdinateur($o1);
        $o2 = new Ordinateur("O28","ASUS");
        $local->addOrdinateur($o2);
        $p1 = new Projecteur("P1","ACER");
        $local->setProjecteur($p1);

        var_dump ($local);
        // pas terrible si on a que le SET!!
        // $local->setOrdinateurs([$o1]);
        // $local->setOrdinateurs([$o1,$o2]);







    ?>
</body>
</html>