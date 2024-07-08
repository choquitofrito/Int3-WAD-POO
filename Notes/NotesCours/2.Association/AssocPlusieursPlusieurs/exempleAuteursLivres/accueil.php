<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "./Auteur.php";
    require_once "./Livre.php";

    $auteur1 = new Auteur("Woolf", "Virginia");
    
    $auteur2 = new Auteur("Austen", "Jane");
    
    $livre1 = new Livre ("23432492349234", "Mrs. Dalloway");
    $livre2 = new Livre ("23432492349234", "Les Vagues");

    $livre3 = new Livre ("00234023402349", "Orgueil et préjugés");

    // $auteur1->addLivre($livre1);
    $livre1->addAuteur($auteur1);
    var_dump ($livre1);

    ?>
</body>
</html>