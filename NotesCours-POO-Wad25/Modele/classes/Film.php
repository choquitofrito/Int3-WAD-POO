<?php
class Film {
    private int $id;
    private string $titre;
    private int $duree;
    private string $description;
    private DateTime $dateSortie;
    private string $image;

    public function __construct(int $id, string $titre, int $duree, string $description, DateTime $dateSortie, string $image) {
        $this->id = $id;
        $this->titre = $titre;
        $this->duree = $duree;
        $this->description = $description;
        $this->dateSortie = $dateSortie;
        $this->image = $image;
    }
    
    public function getId(): int {
        return $this->id;
    }
    
    public function setId(int $id): void {
        $this->id = $id;
    }
    
    public function getTitre(): string {
        return $this->titre;
    }
    
    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }
    
    public function getDuree(): int {
        return $this->duree;
    }
    
    public function setDuree(int $duree): void {
        $this->duree = $duree;
    }
    
    public function getDescription(): string {
        return $this->description;
    }
    
    public function setDescription(string $description): void {
        $this->description = $description;
    }
    
    public function getDateSortie(): DateTime {
        return $this->dateSortie;
    }
    
    public function setDateSortie(DateTime $dateSortie): void {
        $this->dateSortie = $dateSortie;
    }
    
    public function getImage(): string {
        return $this->image;
    }
    
    public function setImage(string $image): void {
        $this->image = $image;
    }

}