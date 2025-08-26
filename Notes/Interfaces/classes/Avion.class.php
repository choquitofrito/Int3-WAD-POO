<?php

class Avion extends Vehicule implements IVolant {

    public function voler():void{
        echo "Je suis un avion et je vole!!";
    }
}