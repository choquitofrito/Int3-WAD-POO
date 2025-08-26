<?php

namespace Web;

class Eleve {
    
    public function __construct ($nom){
        $this->nom= $nom;
        echo "<BR/>Création d'un Eleve: ".$this->nom;
    }
    
}

