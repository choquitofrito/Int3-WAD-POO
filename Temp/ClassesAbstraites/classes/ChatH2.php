<?php

class ChatH2 extends AnimalH {
    
    private int $nbrMoustaches;

    public function __construct (string $nom, int $poids, int $nbrMoustaches){
        // init des propriétés communes
        parent::__construct ($nom, $poids);   
        // init des propriétés propres
        $this->nbrMoustaches = $nbrMoustaches;
    }

    // méthode propre
    public function miauler():void {
        echo "<br>Miauuuuuu!!!!";
    }
    // implementation propre de manger
    // méthode héritée de la classe abstraite et implementée ici
    public function manger():void {
        echo "<br>Miam je mange des poissons!";
    }
    

    

    /**
     * Get the value of nbrMoustaches
     */ 
    public function getNbrMoustaches()
    {
        return $this->nbrMoustaches;
    }

    /**
     * Set the value of nbrMoustaches
     *
     * @return  self
     */ 
    public function setNbrMoustaches($nbrMoustaches)
    {
        $this->nbrMoustaches = $nbrMoustaches;

        return $this;
    }
}