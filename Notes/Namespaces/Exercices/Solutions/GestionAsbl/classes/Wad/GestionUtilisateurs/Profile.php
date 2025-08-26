<?php

namespace Wad\GestionUtilisateurs;

class Profile {
    
    public $type;
    
    public function __construct ($type){
        $this->type=$type;
        echo "<BR/>Création d'un Profile: ".$this->type;
    }
    
}
