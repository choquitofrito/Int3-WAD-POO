<?php

class ContactNew {

    // les propriétés sont fixées dans la 
    // signature du constructeur
    public function __construct(private string $nom, 
                                private string $prenom, 
                                private string $gsm)
    {

    }

    public function afficher(){
        print ("<h3>Nom: " . $this->nom . "<br>Prénom: " . $this->prenom . "<br>Gsm: " . $this->gsm . "</h3>");
    }


}