<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./Animal.php";
    require_once "./Chien.php";
    require_once "./Chat.php";

    // $animal1 = new Animal("Pepe"); // pas possible, abstraite

    $chien1 = new Chien("Laika", false);
    $chat1 = new Chat ("Garfield");
    $chien1->manger();
    $chat1->manger();



    ?>
</body>

</html>