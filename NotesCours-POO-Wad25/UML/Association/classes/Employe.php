<?php

namespace UML\Association\ExempleEntreprise;

class Employe {
    private string $nom;
    private string $email;
    // association
    private Societe $employeur;
    
    public function __construct(string $nom, string $email) {
        $this->nom = $nom;
        $this->email = $email;

    }

    public function getNom() {
        return $this->nom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEmployeur() {
        return $this->employeur;
    }


    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function setEmployeur(Societe $employeur) {
        $this->employeur = $employeur;
    }

}