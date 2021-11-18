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
    $p1 = new \Shop\Basket\Product(4);
    $b1 = new \Shop\Basket\Basket(5);
    $pf1 = new \Shop\BasketFake\Product(10);

    ?>
</body>

</html>