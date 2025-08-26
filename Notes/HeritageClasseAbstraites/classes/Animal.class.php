<?php

// Animal sera une classe abstraite
// Animal est superclasse de Chien et Chat
abstract class Animal
{
    public function __construct(
        protected string $couleur,
        protected int $nombrePattes,
        protected string $lienImg
    ) {
    }
    // toutes les classes qui héritent de cette classe doivent implementer cette méthode
    // (ou elles-mêmes deviendront abstraites)
    // Chaque classe l'implement d'une manière différente
    abstract public function manger():void;

    // toutes les sous-classes le font de la même manière, on implemente la méthode
    // dans la super-classe
    public function dormir (){
        echo "<br>Je dors ZZZZZZZZZZZZZZZ......";
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of nombrePattes
     */
    public function getNombrePattes()
    {
        return $this->nombrePattes;
    }

    /**
     * Set the value of nombrePattes
     *
     * @return  self
     */
    public function setNombrePattes($nombrePattes)
    {
        $this->nombrePattes = $nombrePattes;

        return $this;
    }

        /**
         * Get the value of lienImg
         */ 
        public function getLienImg()
        {
                return $this->lienImg;
        }

        /**
         * Set the value of lienImg
         *
         * @return  self
         */ 
        public function setLienImg($lienImg)
        {
                $this->lienImg = $lienImg;

                return $this;
        }

        public function afficher (){
            echo "<img width='200px' src='" . $this->lienImg . "'>";
        }
}
