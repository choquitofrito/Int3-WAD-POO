<?php


class Serie {

    private string $titre;
    private int $nombreSaisons;
    // etc...
    private array $nomsActeurs; // juste de strings cette fois

    public function __construct(string $titre, int $nombreSaisons)
    {
        $this->titre = $titre;
        $this->nombreSaisons = $nombreSaisons;
    }

    /**
     * Get the value of titre
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }



    /**
     * Get the value of nombreSaisons
     */
    public function getNombreSaisons(): int
    {
        return $this->nombreSaisons;
    }

    /**
     * Set the value of nombreSaisons
     */
    public function setNombreSaisons(int $nombreSaisons): self
    {
        $this->nombreSaisons = $nombreSaisons;

        return $this;
    }
}