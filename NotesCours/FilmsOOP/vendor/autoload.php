<?php

spl_autoload_register(function ($nomClasse){
    // print ("<br>La classe: " . $nomClasse);    
    require_once ("./classes/" . $nomClasse . ".php");
});

