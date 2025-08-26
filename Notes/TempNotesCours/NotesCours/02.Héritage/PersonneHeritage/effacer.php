<?php


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

