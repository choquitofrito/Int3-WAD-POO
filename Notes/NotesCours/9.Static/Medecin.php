<?php

class Medecin
{

    private string $inami;
    private string $nom;
    private static string $serment = "Faire tout bien";

    public function __construct(string $inami = "0000000", string $nom="name")
    {
        $this->inami = $inami;
        $this->nom = $nom;
    }

    



    /**
     * Get the value of inami
     */
    public function getInami(): string
    {
        return $this->inami;
    }

    /**
     * Set the value of inami
     *
     * @return  self
     */
    public function setInami($inami)
    {
        $this->inami = $inami;

        return $this;
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
     *
     * @return  self
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }


    public static function getSerment():string
    {
        return self::$serment;
    }

    public static function setSerment(string $serment)
    {
        self::$serment = $serment;
    }
}
