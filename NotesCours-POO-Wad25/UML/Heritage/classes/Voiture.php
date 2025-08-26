<?php



class Voiture extends Vehicule{

    private int $nbRoues;

    public function __construct (string $marque, int $vitesse, int $nbRoues) {
        parent::__construct ($marque, $vitesse);
        $this->nbRoues = $nbRoues;
    }

    public function getNbRoues(): int {
        return $this->nbRoues;
    }

    public function setNbRoues(int $nbRoues): void {
        $this->nbRoues = $nbRoues;
    }

    public function rouler(){
        echo "<br>La voiture {$this->marque} roule.";
    } 
}

