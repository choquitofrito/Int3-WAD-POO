<?php

class Local
{
    public string $nom;

    public Projecteur $projecteur;
    public array $ordinateurs = [];

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function addOrdinateur(Ordinateur $ordinateur)
    {
        $this->ordinateurs[] = $ordinateur;
    }


    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of projecteur
     */
    public function getProjecteur()
    {
        return $this->projecteur;
    }

    /**
     * Set the value of projecteur
     *
     * @return  self
     */
    public function setProjecteur(Projecteur $projecteur)
    {
        $this->projecteur = $projecteur;

        return $this;
    }

    /**
     * Get the value of ordinateurs
     */
    public function getOrdinateurs()
    {
        return $this->ordinateurs;
    }

    /**
     * Set the value of ordinateurs
     *
     * @return  self
     */
    public function setOrdinateurs(array $ordinateurs)
    {
        $this->ordinateurs = $ordinateurs;

        return $this;
    }
}
