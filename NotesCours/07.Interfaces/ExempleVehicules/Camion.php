<?php
namespace ExempleVehicules;

class Camion extends \ExempleVehicules\Vehicule implements \ExempleVehicules\IRoulant {
    
    // on doit l'implementer à cause de l'héritage
    public function claxoner ():void{
        echo "<br>Meeeeeeeeeeeec!";
    }

    // on doit l'implementer à cause de l'interface
    public function rouler():void {
        echo "<br>Le camion roule!!";
    }

}