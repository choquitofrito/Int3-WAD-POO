<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "./classes/Chien.php";
        include "./classes/Chat.php";
        include "./classes/AnimalH.php";
        include "./classes/ChatH.php";


        $chien1 = new Chien ("Rocky", "noir");
        $chien1->courir();
        $chien1->manger();
        // var_dump ($chien1);

        $chat1 = new Chat ("Azrael", "gris");
        $chat1->courir();
        $chat1->manger();
        // var_dump ($chat1);

        $chatH1 = new ChatH ("Garfield", "gris");
        $chatH1->courir(); // méthode héritée
        $chatH1->miauler(); // méthode propre
        echo "<h2>{$chatH1->getNom()}</h2>";



    ?>
</body>
</html>