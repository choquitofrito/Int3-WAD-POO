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
    
    try {
        require_once "./vendor/autoload.php";
    } catch (Exception $e) {
        echo "<br>On ne trouve pas un autoload";
        die();
    }
    $voiture = new Voiture("bleue");
    $voiture->roulerEnVille();
    $hydro = new Hydroavion("vert");
    $hydro->voler();
    $hydro->naviguer();

    ?>
</body>

</html>