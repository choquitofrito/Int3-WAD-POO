<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./vendor/autoload.php";

    $v1 = new Voiture("X343434");
    // var_dump ($v1);
    $v1->afficher();
    $v1->rouler();
    $v1->claxoner();


    $h1 = new Hovercraft("HOV123");
    // var_dump ($v1);
    $h1->afficher();
    $h1->voler();
    $h1->naviguer();
    $h1->claxoner();

    // envoyer un objet en paramètre sans connaitre le type
    function afficherDansDiv(Vehicule $vehicule): void
    {
        print("<div>");
        $vehicule->afficher();
        print("</div>");
    }
    echo "<hr>";

    // envoyer un objet en paramètre sans connaitre le type
    function demarreVol(IVolant $vehicule): void
    {
        $vehicule->voler();
    }

    afficherDansDiv($h1);
    demarreVol($h1);
    demarreVol($h1);



    ?>
</body>

</html>