<?php

class PersonneC {
    private string $nom;
    private string $prenom;
    private string $etatCivil;

    public function __construct(string $nom = "", string $prenom = "", string $etatCivil = "")
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->etatCivil = $etatCivil;
    }

    public function getNom ():string {
        return $this->nom;
    }

    public function setNom (string $nouveauNom) {
        $this->nom = $nouveauNom;
        return $this;
    }
    
    public function getPrenom ():string {
        return $this->prenom;
    }
    public function setPrenom(string $nouveauPrenom){
        $this->prenom = $nouveauPrenom;
        return $this;
    }

    public function afficherPersonne ():void {
        echo "<br>Je suis une personne et je m'appelle ". $this->prenom. ", ".$this->nom;
        echo "<br>Mon état civil est : ". $this->etatCivil;
    }

    

    /**
     * Get the value of etatCivil
     */ 
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    /**
     * Set the value of etatCivil
     * 
     * @return  self
     */ 
    public function setEtatCivil($etatCivil)
    {
        $this->etatCivil = $etatCivil;
        return $this;
    }
}