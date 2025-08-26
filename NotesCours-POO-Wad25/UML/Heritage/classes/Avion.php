<?php

class Avion extends Vehicule{

    private string $compagnie;

    public function __construct (string $marque, int $vitesse, string $compagnie){
        parent::__construct ($marque, $vitesse);
        $this->compagnie = $compagnie;
    }

    public function getCompagnie(): string {
        return $this->compagnie;
    }

    public function setCompagnie(string $compagnie): void {
        $this->compagnie = $compagnie;
    }    

    public function voler(){
        echo "<br>L'avion vole.";
    }
}