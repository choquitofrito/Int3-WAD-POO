<?php
namespace UML\Association\ExempleEntreprise;


class Societe {
    private string $nom;
    private string $email;
    private array $employes;
    
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

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmployes() {
        return $this->employes;
    }
    public function setEmployes($employes) {
        $this->employes = $employes;
    }

    public function addEmploye(Employe $employe):void {
        $this->employes[] = $employe;
        // fixer l'association dans l'autre sens
        $employe->setEmployeur($this);
    }
}