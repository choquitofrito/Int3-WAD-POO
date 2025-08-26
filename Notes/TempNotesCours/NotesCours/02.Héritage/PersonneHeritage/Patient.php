<?php

include_once "./Personne.php";

class Patient extends Personne {
    public DateTime $dateInscription;

    public function __construct (string $nom,
                                string $email,
                                string $adresse,
                                DateTime $dateInscription){
        parent::__construct($nom, $email, $adresse);
        $this->dateInscription = $dateInscription;
    }

    public function prendreRDV ():void{
        print ("<br>Le patient prend RDV");
    }

    public function afficher ():void{
        parent::afficher();
        print ("<br>Je me suis inscrit le " . $this->dateInscription->format("d-m-y"));
    }


}