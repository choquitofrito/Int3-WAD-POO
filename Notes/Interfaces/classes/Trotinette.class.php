<?php


class Trotinette extends Vehicule implements IRoulant {
    public function roulerEnVille(): void
    {
        echo "<br>Je roule aussi, tel qu'une trotinette!";
    }
    public function roulerEnRoute(): void
    {
        echo "<br>Il faut être taré pour rouler en route avec une trotinette!";
    }

}