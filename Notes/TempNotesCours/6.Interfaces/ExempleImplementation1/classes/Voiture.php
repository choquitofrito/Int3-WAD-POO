<?php

class Voiture extends Vehicule implements IRoulant {
    
    // méthode à implementer héritées de la classe abstraite
    public function claxoner():void {
        print ("<h1>TUTUTTTTTU POUET POUET!!!!!</h1>");
    }

    // méthodes à implementer de l'interface
    public function rouler(){
        print ("<h5>Je suis un voiture et je roule sur la route!<h5>");
    }


}