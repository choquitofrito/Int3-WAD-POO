<?php

include_once "./Contact.class.php";

class Repertoire
{
    private string $nom;
    private string $description;
    private array $contacts;

    public function __construct(string $nom, string $description, array $contacts = [])
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->contacts = $contacts;
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

    public function afficher()
    {
        echo "Le repertoire: ";
    }

    /**
     * Get the value of contacts
     */
    public function getContacts(): array
    {
        return $this->contacts;
    }

    /**
     * Set the value of contacts
     */
    public function setContacts(array $contacts): self
    {
        $arrayOk = true;
        if (is_array($contacts)) {
            if (count($contacts) > 0) {
                $i = 0;
                while ($i < count($contacts) and $arrayOk == true) {
                    if (get_class($contacts[$i]) != "Contact") {
                        $arrayOk = false;
                    }
                    $i++;
                }
                
            }
        }
        if (!$arrayOk) {
            throw new Exception ("Les contacts doivent être sous la forme d'un array d'objets Contact");
        } else {
            // tout ok
            $this->contacts = $contacts;
        }
        return $this;
    }

    // rajouter un contact
    public function addContact(Contact $nouveauContact): self
    {
        // rajoute le contact au repertoire
        $this->contacts[] = $nouveauContact;
        
        // fixer le repertoire pour le contact
        $nouveauContact->setRepertoire($this);

        return $this;
    }
}
