<?php

class Medecin {
    private string $nom;
    private static string $codeDeontologique = 'Faire du bien';

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function __toString(): string {
        return $this->nom . ' - ' . $this->codeDeontologique;
    }

    static public function getCodeDeontologique ():string{
        return self::$codeDeontologique;
    }

    static public function setCodeDeontologique (string $nouveauCode):void{
        self::$codeDeontologique = $nouveauCode;
    }
    

}