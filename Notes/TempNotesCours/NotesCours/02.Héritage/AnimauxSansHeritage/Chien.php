<?php

class Chien {
    public string $nom;
    public string $race;

    public function __construct(string $nom, string $race)
    {
        $this->nom = $nom;
        $this->race = $race;
    }

    public function communiquer (){
        print ("<br>Wooouuff! wouff!! ");
    }

    public function afficher(){
        print ("<br>Je suis le " . $this->race . " " . $this->nom);
    }

    public function guider(){
        print ("<br>Je vous accompagne!");
    }


}

