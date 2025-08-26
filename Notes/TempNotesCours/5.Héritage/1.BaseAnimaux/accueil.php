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

    $c1 = new Chien("Tasio", true);
    $c2 = new Chien("Laika", false);
    
    $c1->jouer();
    $c1->aboyer();

    $chat1 = new Chat ("Garfield");
    $chat2 = new Chat ("Felix");
    $chat3 = new Chat ("Salem");

    $tableChats = [$chat1, $chat2, $chat3];

    foreach ($tableChats as $chat){
        $chat->manger();
        $chat->jouer();
        $chat->miauler();
    }


    // var_dump ($c1);
    // var_dump ($c2);


    ?>
</body>

</html>