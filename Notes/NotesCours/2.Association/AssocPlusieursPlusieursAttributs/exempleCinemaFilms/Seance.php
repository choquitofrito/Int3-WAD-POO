<?php
class Seance {
    
    private DateTime $dateSeance;
    
    // associations
    private Film $film;
    private Cinema $cinema;
    
    public function __construct (DateTime $dateSeance = new DateTime()){
        $this->dateSeance = $dateSeance;
    }

    /**
     * Get the value of dateSeance
     *
     * @return DateTime
     */
    public function getDateSeance(): DateTime
    {
        return $this->dateSeance;
    }

    /**
     * Set the value of dateSeance
     *
     * @param DateTime $dateSeance
     *
     * @return self
     */
    public function setDateSeance(DateTime $dateSeance): self
    {
        $this->dateSeance = $dateSeance;

        return $this;
    }

    /**
     * Get the value of film
     *
     * @return Film
     */
    public function getFilm(): Film
    {
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @param Film $film
     *
     * @return self
     */
    public function setFilm(Film $film): self
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get the value of cinema
     *
     * @return Cinema
     */
    public function getCinema(): Cinema
    {
        return $this->cinema;
    }

    /**
     * Set the value of cinema
     *
     * @param Cinema $cinema
     *
     * @return self
     */
    public function setCinema(Cinema $cinema): self
    {
        $this->cinema = $cinema;

        return $this;
    }
}