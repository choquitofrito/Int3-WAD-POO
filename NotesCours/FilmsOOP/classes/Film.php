<?php

class Film {

    public int $id;
    public string $titre;
    public int $duree;
    public string $description;
    public DateTime $dateSortie;
    public string $image;


    public function __construct (array $init){
        $this->hydrate($init);
    }


    public function hydrate (array $init){
        foreach ($init as $key => $value){
            $nomSet = "set" . ucfirst($key);  // setTitre setDuree
            $this->$nomSet ($value);
        }
    }



    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
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
     * Get the value of duree
     */
    public function getDuree(): int
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     */
    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of dateSortie
     */
    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }

    /**
     * Set the value of dateSortie
     */
    public function setDateSortie(DateTime $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


}
