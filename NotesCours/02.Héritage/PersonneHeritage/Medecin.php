<?php

include_once "./Personne.php";

class Medecin extends Personne {
    public string $INAMI;
    public string $specialite;

    public function __construct (string $nom,
                                string $email,
                                string $adresse,
                                string $INAMI,
                                string $specialite){
        parent::__construct($nom, $email, $adresse);
        $this->INAMI = $INAMI;
        $this->specialite = $specialite;
    }

    // nouvelle notation 
    // public function __construct (string $nom,
    // string $email,
    // string $adresse,
    // public string $INAMI,
    // public string $specialite){
    //     parent::__construct($nom, $email, $adresse);
    //     $this->INAMI = $INAMI;
    //     $this->specialite = $specialite;
    // }





    public function consulter ():void{
        print ("<br>Le médécin consulte");
    }

    public function afficher ():void{
        parent::afficher();
        print ("<br>INAMI: " . $this->INAMI);
        print ("<br>specialité: " . $this->specialite);
    }
 

}