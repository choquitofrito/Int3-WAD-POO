<?php

class JeuSociete
{
    // propriétés
    public string $nom;
    public int $minJoueurs;
    public int $maxJoueurs;
    // méthode constructeur
    public function __construct(
        string $valNom,
        int $valMinJoueurs,
        int $valMaxJoueurs
    ) {
        $this->nom = $valNom;
        $this->minJoueurs = $valMinJoueurs;
        $this->maxJoueurs = $valMaxJoueurs;
    }
    // fonctionnalité
    public function afficher()
    {
        print("<br>Nom du jeu: " . $this->nom);
        print("<br>Nombre de joueurs: " . $this->minJoueurs . "-" . $this->maxJoueurs);
    }
    public function jouer()
    {
        print("<h3>On va jouer!!</h3>");
    }
}

