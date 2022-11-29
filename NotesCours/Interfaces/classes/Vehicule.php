<?php

class Vehicule {
    protected string $modele;
    protected string $numImmatriculation;

    public function __construct (string $modele, string $numImmatriculation){
        $this->modele = $modele;
        $this->numImmatriculation = $numImmatriculation;
    }

    /**
     * Get the value of numImmatriculation
     */ 
    public function getNumImmatriculation()
    {
        return $this->numImmatriculation;
    }

    /**
     * Set the value of numImmatriculation
     *
     * @return  self
     */ 
    public function setNumImmatriculation($numImmatriculation)
    {
        $this->numImmatriculation = $numImmatriculation;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }
}