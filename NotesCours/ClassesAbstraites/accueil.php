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
    $chien1 = new Chien("Pepito", 13);
    var_dump ($chien1);

    $chat1 = new Chat("Azrael", 12);
    var_dump ($chat1);

    $chat1->miauler();


    ?>
    
</body>
</html>