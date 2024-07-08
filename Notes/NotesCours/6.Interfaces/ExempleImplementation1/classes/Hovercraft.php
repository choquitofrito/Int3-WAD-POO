<?php

class Hovercraft extends Vehicule implements IVolant,INaviguant {
    
    // méthode à implementer héritées de la classe abstraite
    public function claxoner():void {
        print ("<h1>Piip piiip!!!!!</h1>");
    }

    public function voler (){
        print ("<h3>Je vole!!!!!</h3>");
        
    }
    
    public function naviguer (){
        print ("<h3>Je navigue!!!!!</h3>");
        
    }



}