<?php

class AngoraChatH2 extends ChatH2 {
    

    public function __construct (string $nom, int $poids, int $nbrMoustaches){
        // init des propriétés communes
        parent::__construct ($nom, $poids, $nbrMoustaches);   
    }

    // implementation propre de manger
    // méthode héritée de la classe abstraite et implementée ici
    public function manger():void {
        parent::manger();
        echo "<br>Je suis un chat d'Angora et je mange à ma manière!";
    }

}