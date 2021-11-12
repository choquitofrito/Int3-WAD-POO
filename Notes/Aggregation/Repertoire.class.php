<?php

class Repertoire {
    public string $titre;
    public array $contacts = []; // initialisation array vide

    public function __construct(string $titre)
    {
        $this->titre = $titre;
    }   
    
    public function addContact (Contact $c){
        $this->contacts[] = $c; // rajouter à la fin de l'array
    }

    public function afficher(){
        foreach ($this->contacts as $unContact){
            $unContact->afficherContact(); // méthode de la classe Contact
        }
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