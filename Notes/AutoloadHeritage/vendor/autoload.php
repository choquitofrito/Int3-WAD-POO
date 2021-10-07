<?php

spl_autoload_register(function ($nomClasse){
    include "./classes/".$nomClasse.".class.php";
});