<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // importer les classes
    require_once "./classes/Film.php";
    require_once "./classes/FilmManager.php";
    include './connexion/db.php';

    try {
        $cnx = new PDO(DSN, DBUSER, DBPASS);
    } catch (Exception $e) {
        // jamais en production car ça montre des infos
        // sensibles
        echo $e->getMessage();
        die();
    }

    // importer faker
    require_once "./vendor/autoload.php";

    $faker = Faker\Factory::create();
    // créer un objet manager
    $manager = new FilmManager($cnx);

    // insérer dix objets Film créer en utilisant Faker
    for ($i = 0; $i < 10; $i++){
        $film = new Film (
            $faker->name(),
            $faker->numberBetween (30, 400),
            $faker->sentence(),
            $faker->dateTime(),
            ""          
        );    
        $manager->insert ($film);    
    }


    ?>
    
</body>
</html>