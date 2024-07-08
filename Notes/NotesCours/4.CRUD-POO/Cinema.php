<?php
class Cinema {
    private int $id;
    private string $nom;
    private string $contact;

    // association
    private array $seances;
    

    public function __construct(string $nom, string $contact){
        $this->nom = $nom;
        $this->contact = $contact;
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
     * Get the value of contact
     *
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @param string $contact
     *
     * @return self
     */
    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of seances
     *
     * @return array
     */
    public function getSeances(): array
    {
        return $this->seances;
    }

    /**
     * Set the value of seances
     *
     * @param array $seances
     *
     * @return self
     */
    public function setSeances(array $seances): self
    {
        $this->seances = $seances;

        return $this;
    }
    // rajouter les éléments de la collection
    public function addSeance (Seance $seance){
        $this->seances[] = $seance;
        // liens seance->cinema
        $seance->setCinema($this);        
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
