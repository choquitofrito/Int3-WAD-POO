<?php


class AppareilDVD
{

    // rappel : on ne doit pas créer les propriétés si on utilise cette syntaxe.

    // public function __construct(
    //     public string $marque,
    //     public int $vitesseLecture
    // ) {}

    public string $marque;
    protected int $vitesseLecture;

    public function __construct(string $marque, int $vitesseLecture){
        $this->marque = $marque;
        $this->vitesseLecture = $vitesseLecture;
    }
    public function lireDVD()
    {
        echo "<br>On lit le DVD magiquement";
    }
}
