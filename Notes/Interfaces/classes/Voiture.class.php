<?php

class Voiture extends Vehicule implements IRoulant {
    public function rouler(): void
    {
        echo "<br>Je suis une voiture et je roule!!";
    }
    
}

?>