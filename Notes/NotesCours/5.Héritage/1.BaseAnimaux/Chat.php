<?php

class Chat extends Animal {

    // le propriétés sont toutes héritées

    public function __construct (string $nom){
        parent::__construct ($nom);
    }

    public function miauler ():void {
        print ("<br>Miau miau!");
    }
    public function jouer (){
        print ("Le chat " . $this->nom . " joue!");
    }

}