<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./classes/Recette.php";
    $recette1 = new Recette ("Gazpacho", "boisson d'Andalusie à base de tomates");
    var_dump($recette1);

    $ingredients = ['tomate', 'ail','huile d olive'];
    $recette1->setIngredients($ingredients);
    $recette1->addIngredient('piment');
    var_dump($recette1);
    $recette1->removeIngredient("ail");
    var_dump($recette1);


    ?>
</body>
</html>