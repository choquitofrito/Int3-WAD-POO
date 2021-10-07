<?php

class Animal
{
    // protected string $couleur;
    // protected int $nombrePattes;

    public function __construct(
        protected string $couleur,
        protected int $nombrePattes,
        protected string $lienImg
    ) {
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
