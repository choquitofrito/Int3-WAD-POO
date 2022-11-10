<?php
class Contact
{
    private string $prenom;
    private string $numero;
    public function __construct(string $prenom, string $numero)
    {
        $this->prenom = $prenom;
        $this->numero = $numero;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function  setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
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
}
