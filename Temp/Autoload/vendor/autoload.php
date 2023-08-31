<?php
spl_autoload_register(
    function ($nomClasse) {
        $nomFichier = "./classes/{$nomClasse}.class.php"; 
        if (file_exists($nomFichier)){
            include_once $nomFichier;
        }
        else {
            throw new Exception ("Le fichier de la classe {$nomClasse} n'existe pas");
        }
    }
);
