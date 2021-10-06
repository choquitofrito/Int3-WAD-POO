<?php

class PersonneC {
    private string $nom;
    private string $prenom;

    public function __construct(string $nom = "", string $prenom = "")
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function getNom ():string {
        return $this->nom;
    }

    public function setNom (string $nouveauNom):void {
        $this->nom = $nouveauNom;
    }

    public function getPrenom ():string {
        return $this->prenom;
    }
    public function setPrenom(string $nouveauPrenom):void {
        $this->prenom = $nouveauPrenom;
    }
}