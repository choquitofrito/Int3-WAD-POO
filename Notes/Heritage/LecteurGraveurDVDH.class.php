<?php

include_once "./AppareilDVD.class.php";

class LecteurGraveurDVDH extends AppareilDVD {
    public int $vitesseEnregistrement;

    public function __construct(string $marque, int $vitesseLecture, int $vitesseEnregistrement)
    {
        parent::__construct ($marque, $vitesseLecture);
        $this->vitesseEnregistrement = $vitesseEnregistrement;
    }

    public function enregistrerDVD (){
        echo "<br>On enregistre un DVD....";

    }
}
