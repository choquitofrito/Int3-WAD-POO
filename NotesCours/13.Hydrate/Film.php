<?php

class Film
{
    private string $titre;
    private int $duree; // en minutes
    private float $prix;


    public function __construct(string $titre, int $duree, float $prix)
    {
        $this->titre = $titre;
        $this->duree = $duree;
        if ($prix >= 0){
            $this->prix = $prix;
        }
        else {
            throw new Exception ("prix doit être positif");
        }
    }

    public function getTitre(){
        return $this->titre;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getDuree(){
        return $this->duree;
    }

    public function setTitre (string $titre){
        $this->titre = $titre;
    }
    public function setDuree (string $duree){
        $this->duree = $duree;
    }
    public function setPrix (float $prix){
        if ($prix >= 0){
            $this->prix = $prix;
        }
        else {
            throw new Exception ("prix doit être positif");
        }
    }



    public function afficher()
    {
        print("<h3>prix: " . $this->prix . "<br>Titre: " . $this->titre . "<br>Durée: " . $this->duree . "</h3>");
    }
}
