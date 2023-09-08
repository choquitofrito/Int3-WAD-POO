<?php

abstract class Vehicule {
    private string $code;

    public function __construct (string $code){
        $this->code = $code;
    }
    
    
    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    // méthodes propres


    public function afficher (){
        print ("<br>J'ai le code " . $this->code);
    }

    abstract public function claxoner ():void;

}


