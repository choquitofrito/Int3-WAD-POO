<?php

class Image {

    private string $src;
    private string $alt;

    public function __construct(string $src, string $alt){
        $this->src = $src;
        $this->alt = $alt;    
    }
    

    /**
     * Get the value of src
     *
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * Set the value of src
     *
     * @param string $src
     *
     * @return self
     */
    public function setSrc(string $src): self
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get the value of alt
     *
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * Set the value of alt
     *
     * @param string $alt
     *
     * @return self
     */
    public function setAlt(string $alt): self
    {
        $this->alt = $alt;

        return $this;
    }

    public function afficher(){
        // <img src='toto.jpg' alt='je suis toto'>
        print ("<img src='" . $this->src . "' alt='" . $this->alt . "'>");
    }


}