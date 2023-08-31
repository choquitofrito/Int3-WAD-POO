<?php

include_once "Personne.class.php";

class Societe
{

    private string $nom;
    private string $description;

    // rélation (association)
    private array $employes;
    private array $fondateurs;



    public function __construct(string $nom, string $description)
    {
        $this->nom = $nom;
        $this->description = $description;
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
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of employes
     */
    public function getEmployes(): array
    {
        return $this->employes;
    }

    /**
     * Set the value of employes
     */
    public function setEmployes(array $employes): self
    {
        $this->employes = $employes;

        return $this;
    }

    /**
     * Get the value of fondateurs
     */
    public function getFondateurs(): array
    {
        return $this->fondateurs;
    }

    /**
     * Set the value of fondateurs
     */
    public function setFondateurs(array $fondateurs): self
    {
        $this->fondateurs = $fondateurs;

        return $this;
    }

    // méthodes de l'association
    public function addEmploye(Personne $employe): self
    {
        // lien 1
        $this->employes[] = $employe;
        // lien 2
        $employe->setEmployeur($this);

        return $this;
    }


    public function addFondateur(Personne $fondateur): self
    {
        // lien 1
        $this->fondateurs[] = $fondateur;

        return ($this);
    }
}
