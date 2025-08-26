<?php

class Medecin {
    public string $nom;
    public string $login;
    
    public static string $codeDeontologique;

    public function __construct (string $nom,
                                string $login,
                   ){
        $this->nom = $nom;
        $this->login = $login;
    }

    public static function setCodeDeontologique (string $code){
        self::$codeDeontologique = $code;
    }

    public static function getCodeDeontologique (){
        return (self::$codeDeontologique);
    }

}
