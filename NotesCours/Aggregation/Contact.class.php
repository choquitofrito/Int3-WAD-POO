<?php

include_once "./Repertoire.class.php";

class Contact
{
    private string $nom;
    private string $numero;
    // le repertoire
    private Repertoire $repertoire;

    
    /**
     * __construct
     *
     * @param  mixed $nom
     * @param  mixed $numero
     * @return void
     */
    public function __construct(string $nom, string $numero)
    {
        $this->nom = $nom;
        $this->numero = $numero;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function  setNom(string $nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function getNumero(): string
    {
        return $this->numero;
    }
    public function setNumero(string $numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Get the value of repertoire
     */
    public function getRepertoire(): Repertoire
    {
        return $this->repertoire;
    }

    /**
     * Set the value of repertoire
     */
    public function setRepertoire(Repertoire $repertoire): self
    {
        $this->repertoire = $repertoire;

        return $this;
    }
}
