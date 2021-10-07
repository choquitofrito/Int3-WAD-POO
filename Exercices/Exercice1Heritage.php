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
    include_once "./classes/Animal.class.php";
    include_once "./classes/Chien.class.php";
    include_once "./classes/Chat.class.php";
    
    $chien1 = new Chien("noir",3, "./classes/images/chien1.jpg"); // ou une image du net...
    $chat1 = new Chat("blanc",5,"./classes/images/chat1.jpg",true);
    $chien1->afficher();
    $chat1->afficher();
    var_dump ($chien1);
    var_dump ($chat1);




    ?>
</body>

</html>