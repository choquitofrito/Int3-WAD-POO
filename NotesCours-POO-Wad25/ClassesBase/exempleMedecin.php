<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./classes/Medecin.php";

    $medecin1 = new Medecin();
    $medecin1->nom ="Emilie";
    $medecin1->inami = "234324523452345234";
    echo ($medecin1->getCodeDeontologique());
    var_dump ($medecin1);

    ?>
</body>
</html>