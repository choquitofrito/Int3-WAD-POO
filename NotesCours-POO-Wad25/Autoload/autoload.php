<?php

spl_autoload_register (function ($nomClasse){
    require_once ("./classes/" . $nomClasse . ".php");
});