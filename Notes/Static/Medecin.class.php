<?php

class Medecin {
    public string $nom;
    private static string $codeDeo;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    public function afficher(){
        echo "<br>Bonjour, je suis le médecin ".$this->nom;
        // echo "Mes regles sont : ". $this->codeDeo;
    }
    public static function setCodeDeo (string $nouveauCode){
        self::$codeDeo = $nouveauCode;
    }
    public static function getCodeDeo (){
        return self::$codeDeo;
    }

    
}