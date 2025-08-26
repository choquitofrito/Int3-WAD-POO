<?php

class Societe {

    public string $nom;
    public string $adresse;

    // liens (association)
    public array $employes;


    public function __construct (string $nom, string $adresse){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->employes = []; // array();
    }

    // méthodes de l'association
    public function addEmploye (Personne $p) {
        // rajouter l'objet dans l'array

        // lien Societe-Employe: rajouter l'employé à l'array $employes
        $this->employes[] = $p;
        // lien Employe-Societe: fixer l'employeur pour l'employe courant
        $p->setEmployeur($this);

    }

    public function removeEmploye (Personne $p){
        // if (in_array($p, $this->employes)){
        //     $pos = array_search($p, $this->employes);
        //     unset ($this->employes[$pos]);
        //     print ("trouve et effacé!");
        // }
        // else {
        //     print ("pas trouvé!");
        // }

        // $pos sera false ou une poisition (0,1,2..)
        $pos = array_search($p, $this->employes);
        if ( $pos !== false){
            unset ($this->employes[$pos]);
            print ("trouve et effacé!");
        }
        

    }

}
