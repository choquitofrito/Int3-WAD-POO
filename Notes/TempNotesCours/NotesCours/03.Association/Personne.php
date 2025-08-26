<?php

class Personne {

    public string $nom;
    public string $email;

    // liens (association)
    public Societe $employeur;

    public function __construct (string $nom, string $email){
        $this->nom = $nom;
        $this->email = $email;
    }

    // méthodes d'association
    public function setEmployeur (Societe $s){
        $this->employeur = $s;
    } 

}
