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
    // pas possible, classe abstraite!
    // $animal = new AnimalH();

    $chat1 = new ChatH ("Myst", 3, 200);
    var_dump ($chat1);
    $chien1 = new ChienH ("Perrito", 9);
    $chien1->manger();
    $chat1->manger();
    $chat1->seDeplacer();
    



    ?>
    
</body>
</html>