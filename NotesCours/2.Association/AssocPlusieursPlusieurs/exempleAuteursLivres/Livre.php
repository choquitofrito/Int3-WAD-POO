<?php

class Livre
{
    private string $isbn;
    private string $titre;

    // association 
    private array $auteurs;

    public function __construct(string $isbn, string $titre)
    {
        $this->isbn = $isbn;
        $this->titre = $titre;
    }



    /**
     * Get the value of isbn
     *
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @param string $isbn
     *
     * @return self
     */
    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     *
     * @return self
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteurs
     *
     * @return array
     */
    public function getAuteurs(): array
    {
        return $this->auteurs;
    }

    /**
     * Set the value of auteurs
     *
     * @param array $auteurs
     *
     * @return self
     */
    public function setAuteurs(array $auteurs): self
    {
        $this->auteurs = $auteurs;

        return $this;
    }

    
}
