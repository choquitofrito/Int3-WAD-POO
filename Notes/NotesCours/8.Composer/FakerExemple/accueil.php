<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        require_once "./vendor/autoload.php";
      
        // utiliser Faker
        use Faker\Factory;

        $faker = Factory::create("ar_SA");
        $unNom = $faker->name();

        print ("<h2>Bienvenue " . $unNom . "</h2>");



    ?>
</body>

</html>