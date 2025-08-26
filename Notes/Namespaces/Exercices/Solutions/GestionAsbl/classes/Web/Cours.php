<?php

namespace Web;

class Cours {
    
    public function __construct ($nom){
        $this->nom= $nom;
        echo "<BR/>Création d'un Cours: ".$this->nom;
    }
    
}

