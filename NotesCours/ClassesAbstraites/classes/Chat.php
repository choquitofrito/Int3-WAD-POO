<?php

class Chat {
    private string $nom;
    private int $poids;
    
    public function __construct (string $nom, int $poids){
        $this->nom = $nom;
        $this->poids = $poids;
    }


    public function miauler():void {
        echo "<br>Miauuuuuu!!!!";
    }
    public function manger():void {
        echo "<br>Miam je mange des poissons!";
    }
    public function seDeplacer():void{
        echo "<br>Je cours dans tous les sens!";
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
}