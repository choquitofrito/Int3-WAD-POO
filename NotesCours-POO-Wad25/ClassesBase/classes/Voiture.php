<?php

class Voiture
{
    // propriétés
    private string $marque;
    private string $modele;
    private int $vitesse;
    private array $options;

    public function __construct(string $marque,
                                string $modele,
                                int $vitesse
    )
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse = $vitesse;
        $this->options = [];
    }

    public function getMarque():string {
        return $this->marque;
    }

    public function setMarque(string $nouvelleMarque):void{
        $this->marque = $nouvelleMarque;
    }

    // méthodes
    public function afficher():void {
        echo $this->marque;
    }

    public function getModele():string {
        return $this->modele;
    }

    public function setModele(string $nouveauModele):void{
        $this->modele = $nouveauModele;
    }

    public function getVitesse():int {
        return $this->vitesse;
    }

    public function setVitesse(int $nouvelleVitesse):void{
        $this->vitesse = $nouvelleVitesse;
    }

    public function getOptions():array {
        return $this->options;
    }

    public function setOptions(array $nouvellesOptions):void {
        $this->options = $nouvellesOptions;
    }

    
}


