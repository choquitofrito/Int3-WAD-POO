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

    include("./Personne.class.php");
    include("./PersonneP.class.php");
    include("./PersonneC.class.php");
    include("./PersonneC2.class.php");

    // Création d'un 1er objet Personne. On le stocke dans la variable $person1
    $person1 = new Personne();

    // Création d'un 2éme objet Personne. On le stocke dans la variable $person2
    $person2 = new Personne();
    var_dump($person1); // afficher le contenu de l'objet
    var_dump($person2);


    // changer les propriétés de l\'objet et l\'afficher
    $person1->nom = "Vonnegut"; // modifier la propriété nom
    $person1->prenom = "Kurt"; // modifier la propriété prenom
    echo $person1->nom; // lire la propriété, même syntaxe !
    echo "<br>Le prenom est: " . $person1->prenom;


    // getter et setter
    $person1 = new PersonneP();
    $person1->setNom("Connors");
    echo "<br>Le nom de PersonneP : " . $person1->getNom();
    // echo $person1->nom; // erreur!! La propriété est privée 


    // constructeur
    $person1 = new PersonneC("María" , "Delangre");
    echo "<br>Le prénom de PersonneC : " . $person1->getPrenom();
    echo "<br>Le nom de PersonneC : " . $person1->getNom();


    // constructeur PHP8 
    $person1 = new PersonneC2("María" , "Delangre");
    echo "<br>Le prénom de PersonneC2 : " . $person1->getPrenom();
    echo "<br>Le nom de PersonneC2 : " . $person1->getNom();
    

    ?>

</body>

</html>