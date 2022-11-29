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

    $chat1 = new ChatH2 ("Myst", 3, 200);
    var_dump ($chat1);
    $chat1->manger();
    $chat1->seDeplacer();


    $chat2 = new AngoraChatH2 ("Angoramyst", 3, 200);
    var_dump ($chat2); 
    $chat2->manger();
    $chat2->seDeplacer();



    ?>
    
</body>
</html>