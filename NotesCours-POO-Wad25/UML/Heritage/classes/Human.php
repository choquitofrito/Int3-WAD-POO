<?php

class Human implements IPersonnage {
    private string $nom;
    private string $description;
    
    public function __construct(string $nom, string $description) {
        $this->nom = $nom;
        $this->description = $description;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function sePresenter(): void {
        echo "<br>Je suis un human nommé {$this->nom}.";
    }

    public function sentir(): void {
        echo "<br>Ça sent bon!";
    }

    public function seDeplacer(): void {
        echo "<br>Je peux me deplacer comme un human!!.";
    }

    public function parler(): void {
        echo "<br>Je peux parler comme un human!!.";
    }
}