<?php

abstract class VehiculeA {
    protected string $marque;
    protected int $vitesse;

    public function __construct(string $marque, int $vitesse) {
        $this->marque = $marque;
        $this->vitesse = $vitesse;
    }

    public function getMarque(): string {
        return $this->marque;
    }

    public function getVitesse(): int {
        return $this->vitesse;
    }

    public function setMarque(string $marque): void {
        $this->marque = $marque;
    }

    public function setVitesse(int $vitesse): void {
        $this->vitesse = $vitesse;
    }

    abstract public function demarrer();


}