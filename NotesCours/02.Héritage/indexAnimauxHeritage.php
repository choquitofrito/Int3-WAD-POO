<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // include_once "./Animal.php";
        include_once "./Chat.php";

        // $a1 = new Animal ("Lolo", "cocker");
        // $a1->afficher();

        $c1 = new Chat ("Felix", "sphinx");
        $c1->tomberDebout();
        var_dump ($c1);


    ?>

    
</body>
</html>