<?php
class LecteurGraveurDVD {
    public string $marque;
    public string $vitesseLecture;
    public string $vitesseEnregistrement;

    public function __construct(string $marque, int $vitesseLecture)
    {
        $this->marque = $marque;
        $this->vitesseLecture = $vitesseLecture;
    }

    public function lireDVD (){
        echo "<br>On lit le DVD....";
    }
    public function enregistrerDVD (){
        echo "<br>On enregistre un DVD....";

    }
}
