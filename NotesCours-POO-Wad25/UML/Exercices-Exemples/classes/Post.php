<?php

class Post {
    private string $titre;
    private string $texte;
    private User $auteur;
    private DateTime $dateCreation;

    public function __construct(string $titre, string $texte, User $auteur) {
        $this->titre = $titre;
        $this->texte = $texte;
        $this->auteur = $auteur;
        $this->dateCreation = new DateTime();
        $auteur->addPost($this);
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }

    public function getTexte(): string {
        return $this->texte;
    }

    public function setTexte(string $texte): void {
        $this->texte = $texte;
    }

    public function getAuteur(): User {
        return $this->auteur;
    }

    public function setAuteur(User $auteur): void {
        $this->auteur = $auteur;
    }

    public function getDateCreation(): DateTime {
        return $this->dateCreation;
    }

    public function getResume(int $length = 100): string {
        if (strlen($this->texte) <= $length) {
            return $this->texte;
        }
        return substr($this->texte, 0, $length) . '...';
    }

    public function __toString(): string {
        $date = $this->dateCreation->format('Y-m-d H:i:s');
        return "[{$date}] {$this->titre} (by {$this->auteur->getNom()})\n" . 
               $this->getResume(150);
    }
}