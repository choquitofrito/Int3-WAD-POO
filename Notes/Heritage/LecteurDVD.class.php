<?php
class LecteurDVD {
    public string $marque;
    public string $vitesseLecture;

    public function __construct(string $marque, int $vitesseLecture)
    {
        $this->marque = $marque;
        $this->vitesseLecture = $vitesseLecture;
    }
    public function lireDVD (){
        echo "<br>On lit le DVD....";
    }
}
