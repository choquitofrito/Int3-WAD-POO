<?php


class PersonneC2 {
    
    public function __construct (private string $prenom, private string $nom){

    }

    /**
     * Obtenir la valeur de nom
     */ 
    public function getNom():string
    {
        return $this->nom;
    }

    /**
     * Modifier la valeur de nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
}

