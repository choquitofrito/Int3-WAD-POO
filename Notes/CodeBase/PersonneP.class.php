<?php


class PersonneP {
    private string $prenom;
    private string $nom;

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
}

