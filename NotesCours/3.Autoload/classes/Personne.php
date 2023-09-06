<?php


class Personne{
    private string $nom;
    private string $prenom;

    // association
    private array $passeports;

    public function __construct (string $nom = "Dupont", string $prenom = "Laurence"){ // par exemple
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    
    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of passeports
     *
     * @return array
     */
    public function getPasseports(): array
    {
        return $this->passeports;
    }

    /**
     * Set the value of passeports
     *
     * @param array $passeports
     *
     * @return self
     */
    public function setPasseports(array $passeports): self
    {
        $this->passeports = $passeports;

        return $this;
    }

    // pour rajouter les éléments de la collection (array)
    public function addPasseport (Passeport $passeport){
        // lien vers *
        $this->passeports[] = $passeport;
        // lien vers 1
        $passeport->setPersonne($this);
    }

    // afficher tous les passeports
    public function afficherPasseports (){
        foreach ($this->passeports as $unPassport){
            $unPassport->afficher();
        }

    }
}