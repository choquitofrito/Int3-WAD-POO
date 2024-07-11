<?php


class Personne
{
    // public string $nom;
    // public string $email;
    // public string $adresse;

    // public function __construct (string $nom, string $email, string $adresse){
    //     $this->nom = $nom;
    //     $this->email = $email;
    //     $this->adresse = $adresse;
    // }
    public function __construct(public string $nom, public string $email, public string $adresse)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->adresse = $adresse;
    }


    public function afficher(): void
    {
        print("<br>Je suis " . $this->nom);
        print("<br>Mon mail: " . $this->email);
        print("<br>J'habite à " . $this->adresse);

    }
}
