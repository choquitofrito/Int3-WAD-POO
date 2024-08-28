<?php
namespace ExempleVehicules;


abstract class Vehicule {

    public string $code;

    public function afficher():void {
        echo "<br>Je suis un " . get_class($this);
    }

    abstract public function claxoner():void;


}