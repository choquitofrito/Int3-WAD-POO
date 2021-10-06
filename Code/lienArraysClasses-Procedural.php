<?php
declare(strict_types=1);
?>
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
    // structure de données (array)
    $contact1 = [
        'nom' => 'Smith',
        'prenom' => 'Judy'
    ];

    // fonctionnalité. Elle n'est pas liée à la structure de données 
    // (l'array précédente)
    // (seulement dans notre esprit!)
    function afficherUL(array $arrayContact): void
    {
        echo "<ul>";
        foreach ($arrayContact as $cle => $val) {
            echo "<li>" . $cle . " : " . $val . "</li>";
        }
        echo "</ul>";
    }
    function changerNom(array &$arrayContact, string $nouveauNom): void
    {
        $arrayContact['nom'] = $nouveauNom;
    }


    // utilisation du code
    afficherUL($contact1);
    changerNom($contact1, "Dupont");
    afficherUL($contact1);
    

    ?>
</body>

</html>