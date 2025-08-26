<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./Chien.php";
    include "./Chat.php";

    $chien1 = new Chien("Laika", "samoyède");
    $chien1->afficher();
    $chien1->communiquer();

    $chat1 = new Chat ("Azrael", "angora");
    $chat1->afficher();
    $chat1->communiquer();



    ?>
</body>
</html>