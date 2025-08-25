<?php

class Medecin {

    public string $nom;
    public string $inami;

    private string $codeDeontologique = "Traiter bien les patients";

    public function getCodeDeontologique():string {
        return $this->codeDeontologique;
    }

    public function setCodeDeontologique(string $nouveauCodeDeontologique):void {
        $this->codeDeontologique = $nouveauCodeDeontologique;
    }

    public function getNom():string {
        return $this->nom;
    }

    public function setNom(string $nouveauNom):void {
        $this->nom = $nouveauNom;
    }

    public function getInami():string {
        return $this->inami;
    }

    public function setInami(string $nouveauInami):void {
        $this->inami = $nouveauInami;
    }

    public function afficher():void {
        echo $this->nom;
    }


}
