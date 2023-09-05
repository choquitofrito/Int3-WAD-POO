<?php


class Chien extends Animal
{

    protected bool $garde;

    public function __construct(string $nom, bool $garde = false)
    {
        parent::__construct($nom);
        $this->garde = $garde;
    }

    public function jouer()
    {
        print("<br>" . $this->nom . " joue!");
    }

    public function aboyer()
    {
        print("<br>Guau guau!!!!!!!");
    }

    /**
     * Get the value of garde
     */
    public function getGarde()
    {
        return $this->garde;
    }

    /**
     * Set the value of garde
     *
     * @return  self
     */
    public function setGarde($garde)
    {
        $this->garde = $garde;

        return $this;
    }

    // méthode abstraite héritée de la classe de base
    public function manger()
    {
        print "<br>Le chien mange des os";
    }
}
