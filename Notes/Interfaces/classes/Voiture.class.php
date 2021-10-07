<?php

class Voiture extends Vehicule implements IRoulant {
    public function roulerEnVille(): void
    {
        echo "<br>Je suis une voiture et je roule en ville!!";
    }
    public function roulerEnRoute(): void
    {
        echo "<br>Je suis une voiture et je roule en route!!";
    }

    
}

?>