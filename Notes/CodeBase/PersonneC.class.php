<?php


class PersonneC {
    private string $prenom;
    private string $nom;


    public function __construct (string $prenom, string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
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

