<?php

// php envoie le nom de la classe 
// à la fonction qui a été enregistrée comme autoload
function monAutoload (string $nomClasse){
    // print ("La classe dont on fait new: " . $nomClasse);
    require_once "./classes/" . $nomClasse . ".php";
}

// fixe une fonction d'autoload
// Elle sera lancée à chaque fois qu'on fait "new X"
spl_autoload_register('monAutoload');


