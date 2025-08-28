<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Bonjour, on va utiliser Spatie pour manipuler une image<br>";
    
    require_once "./vendor/autoload.php";

    // use Spatie\Image\Image;
    // Image::load ("./images/loup.jpg");

    $faker = Faker\Factory::create();
    for ($i=0; $i<10;$i++){
        echo "<h5> {$faker->name()} </h5>";
    }




    




    ?>

    
</body>
</html>