<?php

class Hydroavion extends Vehicule implements IVolant,INaviguant {
    public function voler():void {
        echo "<br>Je suis un hydroavion et je vole!";
    }
    public function naviguer(): void
    {
        echo "<br>Je suis un hydroavion et je navigue!";
    }

}