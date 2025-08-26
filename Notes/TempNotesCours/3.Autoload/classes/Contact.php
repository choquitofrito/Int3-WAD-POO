<?php

class Contact
{
    private string $nom;
    private string $prenom;
    private string $gsm;

    // association
    private Repertoire $repertoire;

    public function __construct(string $valNom, string $valPrenom, string $gsm)
    {
        $this->nom = $valNom;
        $this->prenom = $valPrenom;
        $this->gsm = $gsm;
    }

    public function setNom(string $nouveauNom):self 
    {
        $this->nom = $nouveauNom;
        return $this;
    }
    public function getNom():string
    {
        return $this->nom;
    }

    public function setPrenom(string $nouveauPrenom):self 
    {
        $this->prenom = $nouveauPrenom;
        return $this;
    }
    public function getPrenom():string
    {
        return $this->prenom;
    }


    public function afficher(): void
    {
        print("<h3>Nom: " . $this->nom . "<br>Prénom: " . $this->prenom . "<br>Gsm: " . $this->gsm);
    }

    /**
     * Get the value of repertoire
     *
     * @return Repertoire
     */
    public function getRepertoire(): Repertoire
    {
        return $this->repertoire;
    }

    /**
     * Set the value of repertoire
     *
     * @param Repertoire $repertoire
     *
     * @return self
     */
    public function setRepertoire(Repertoire $repertoire): self
    {
        $this->repertoire = $repertoire;

        return $this;
    }
}
