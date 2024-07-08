<?php
// forcer la vérification de types
declare(strict_types=1);

class Eleve
{

    // propriétés
    private $id;
    private string $prenom;
    private int $anneeInscription;
    private DateTime $dateNaissance; // un objet de la classe DateTime
    private string $avatar;

    // methodes
    public function __construct(
        string $prenom,
        int $anneeInscription,
        DateTime $dateNaissance = new DateTime(),
        string $avatar = ""
    ) {
        $this->prenom = $prenom;
        $this->anneeInscription = $anneeInscription;
        $this->dateNaissance = $dateNaissance;
        $this->avatar = $avatar;
    }

    public function setPrenom(string $prenom): self
    {
        if (mb_strlen($prenom) >= 5) {
            $this->prenom = $prenom;
        }
        return ($this);
    }
    public function getPrenom(): string
    {
        return ($this->prenom);
    }

    /**
     * Get the value of anneeInscription
     */
    public function getAnneeInscription(): int
    {
        return $this->anneeInscription;
    }

    /**
     * Set the value of anneeInscription
     *
     * @return  self
     */
    public function setAnneeInscription(int $anneeInscription): self
    {
        $this->anneeInscription = $anneeInscription;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */
    public function getDateNaissance(): DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */
    public function setDateNaissance($dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getAvatar(): string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar)
    {
        $this->avatar = $avatar;
    }

    ////
    public function afficher(): void
    {
        print("<h3>Je suis " . $this->prenom . " . Je me suis inscrite l'année " . $this->anneeInscription . " et je suis née en " . $this->dateNaissance->format("Y") . "</h3>"
        );
    }
}
