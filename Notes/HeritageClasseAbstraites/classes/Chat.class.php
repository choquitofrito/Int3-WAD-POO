<?php


class Chat extends Animal
{
    public bool $griffeurRideau;
 
    // on crée le constructer ad-hoc
    public function __construct ($couleur, $nombrePattes,$lienImage,$griffeurRideau){
        parent::__construct ($couleur,$nombrePattes, $lienImage);
        $this->griffeurRideau = $griffeurRideau;
    }

    public function miauler (){
        echo "<br>!MIAAAAAAAAAAAAAAAAAAAAAAAAAAAUU!";
    }
}
