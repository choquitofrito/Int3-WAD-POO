<?php

class Chaussure
{
    public string $marque;
    public float $taille;

    public function __construct(string $marque,
                                float $taille
    )
    {
        $this->marque = $marque;
        $this->taille = $taille;
    }

    public function getMarque():string {
        return $this->marque;
    }

    public function setMarque(string $nouveauMarque):void {
        $this->marque = $nouveauMarque;
    }

    public function getTaille():float {
        return $this->taille;
    }

    public function setTaille(float $nouvelleTaille):void {
        $this->taille = $nouvelleTaille;
    }
}
