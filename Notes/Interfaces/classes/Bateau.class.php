<?php

class Bateau extends Vehicule implements INaviguant {
    public function naviguer():void{
        echo "Je suis un bateau et je navigue!!";
    }
    
}