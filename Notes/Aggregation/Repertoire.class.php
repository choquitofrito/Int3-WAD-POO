<?php

class Repertoire {
    public string $titre;

    public function __construct(string $titre)
    {
        $this->titre = $titre;
    }    
    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
}