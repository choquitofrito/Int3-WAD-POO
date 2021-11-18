<?php
namespace GestionAsbl\Web;

class Eleve
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
        echo "<br>On construit, DANS WEB, un Eleve : " . $this->id;
    }
}
