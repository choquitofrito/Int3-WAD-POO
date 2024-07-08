<?php

class Compte
{
    private string $numero;
    private float $solde;

    public function __construct(string $numero, float $solde)
    {
        $this->numero = $numero;
        $this->solde = $solde;
    }

    

    /**
     * Get the value of numero
     *
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @param string $numero
     *
     * @return self
     */
    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of solde
     *
     * @return float
     */
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @param float $solde
     *
     * @return self
     */
    public function setSolde(float $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function rajouterMontant (float $montant):self{
        $this->solde = $this->solde + $montant;
        return $this;

    }
    public function retirerMontant (float $montant):self{
        if ($montant <= $this->solde){
            $this->solde = $this->solde - $montant;
        }
        else {
            print ("On est à sec. Sorry");
        }
        return $this;

    }


}
