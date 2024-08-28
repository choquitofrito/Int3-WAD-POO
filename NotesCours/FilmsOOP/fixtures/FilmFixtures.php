<?php
include "./classes/Film.php";
include "./classes/FilmManager.php";

use Faker\Factory;

class FilmFixtures
{

    public function lancerFixtures()
    {
        $faker = Factory::create('fr_BE');

        $fm = new FilmManager();

        for ($i = 0; $i < 100; $i++) {
            $film = new Film ([
                'titre' => $faker->sentence(3),
                'duree' => rand (30,300),
                'description' => $faker->paragraph(),
                'dateSortie' => $faker->dateTime(),
                'image' => "https://picsum.photos/seed/picsum/200/300",
            ]
            );
            $fm->insert($film);
        
        }

        
    }
}
