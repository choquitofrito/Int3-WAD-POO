<?php

include_once "./AppareilDVD.class.php";

class LecteurGraveurDVD extends AppareilDVD
{

    // à regarder.... on crée une variable dans le constructeur
    // et on donne des valeurs à ce qui existe
    // public function __construct(
    //     string $marque,
    //     int $vitesseLecture,
    //     public int $vitesseEnregistrement
    // ) {
    //     parent::__construct($marque, $vitesseLecture);
    // }

    public int $vitesseEnregistrement;

    public function __construct (string $marque, int $vitesseLecture, int $vitesseEnregistrement){
        parent::__construct ($marque,$vitesseLecture);
        $this->vitesseEnregistrement = $vitesseEnregistrement;
    }
    public function graver()
    {
        echo "<br>On enregistre le DVD";
    }
}
