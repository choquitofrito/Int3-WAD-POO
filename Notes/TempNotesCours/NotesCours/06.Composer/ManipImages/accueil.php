<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./vendor/autoload.php";

    
    use Spatie\Image\Image;
    use Faker\Factory;

    // $i = Image::load("./images/loup.jpg");
    // var_dump ($i);

    $faker = Factory::create();
    echo $faker->country();



    ?>
    
</body>
</html>