<?php

class ChienH extends AnimalH {
    
    public function __construct (string $nom, int $poids){
        parent::__construct ($nom, $poids);
    }


    public function aboyer():void {
        echo "<br>wouafff wouaff!!!!";
    }
    public function manger():void {
        echo "<br>Miam je mange des os!";
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