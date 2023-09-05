<?php


class Chien extends Animal {

    public bool $garde;

    public function __construct (string $nom , bool $garde){
        parent::__construct ($nom);
        $this->garde = $garde;
    }

    public function jouer (){
        print ("<br>" . $this->nom . " joue!");
    }

    public function aboyer (){
        print ("<br>Guau guau!!!!!!!");
    }
}