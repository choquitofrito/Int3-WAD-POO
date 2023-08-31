<?php

abstract class AnimalH {
    protected string $nom;
    protected int $poids;

    public function __construct (string $nom, int $poids){
        $this->nom = $nom;
        $this->poids = $poids;
    }

    // méthode abstraite, la classe doit être abstraite
    abstract public function manger():void;

    public function seDeplacer():void{
        echo "<br>Je cours dans tous les sens!";
    }


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of poids
     */ 
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @return  self
     */ 
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }
}