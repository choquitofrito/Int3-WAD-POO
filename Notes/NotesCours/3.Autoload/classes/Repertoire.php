<?php
// include_once "./Contact.php";

class Repertoire {

    private string $nom;
    private string $description;

    // association
    private array $contacts = [];


    public function __construct (string $nom, string $description){
        $this->nom = $nom;
        $this->description = $description;
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
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of contacts
     *
     * @return array
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * Set the value of contacts
     *
     * @param array $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }

    // rajouter un Contact
    public function addContact (Contact $c){
        $this->contacts[] = $c;
        // créer le lien dans l'autre sens
        $c->setRepertoire($this);
    }


}