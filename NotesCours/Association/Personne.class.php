<?php
include_once "Societe.class.php";

class Personne
{

    private string $nom;
    private string $gsm;

    // rélation (association)
    private Societe $employeur;
    private array $societesFondees; // array de Societes que la Personne a fondé




    public function __construct(string $nom, string $gsm)
    {
        $this->nom = $nom;
        $this->gsm = $gsm;
    }

    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of gsm
     */
    public function getGsm(): string
    {
        return $this->gsm;
    }

    /**
     * Set the value of gsm
     */
    public function setGsm(string $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get the value of employeur
     */
    public function getEmployeur(): Societe
    {
        return $this->employeur;
    }

    /**
     * Set the value of employeur
     */
    public function setEmployeur(Societe $employeur): self
    {
        $this->employeur = $employeur;

        return $this;
    }

    /**
     * Get the value of societesFondees
     */
    public function getSocietesFondees(): array
    {
        return $this->societesFondees;
    }

    /**
     * Set the value of societesFondees
     */
    public function setSocietesFondees(array $societesFondees): self
    {
        $this->societesFondees = $societesFondees;

        return $this;
    }

    // méthodes de l'association
    public function addSocieteFondee(Societe $societe):self
    {   
        $this->societesFondees [] = $societe;     
        return ($this);   
    }
}
