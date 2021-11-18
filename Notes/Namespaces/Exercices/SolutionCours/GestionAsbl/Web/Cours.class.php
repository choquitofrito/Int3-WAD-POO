<?php


namespace GestionAsbl\Web;

class Cours
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
        echo "<br>On construit, DANS WEB, un cours : " . $this->id;
    }
}
