<?php

class Image {
    public string $lien;


    public function __construct (string $lien){
        $this->lien = $lien;
    }

    /**
     * Get the value of lien
     */ 
    public function getLien():string
    {
        return $this->lien;
    }

    /**
     * Set the value of lien
     *
     * @return  self
     */ 
    public function setLien(string $lien):self
    {
        $this->lien = $lien;

        return $this;
    }

    public function afficher ():void {
        print ("<img src='./images/" . $this->lien  . "'>");
                
    }
}


