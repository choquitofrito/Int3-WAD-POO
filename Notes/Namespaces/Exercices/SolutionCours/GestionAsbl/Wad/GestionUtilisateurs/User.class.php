<?php
namespace GestionAsbl\Wad\GestionUtilisateurs;

class User
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
        echo "<br>On construit, DANS WEB, un User : " . $this->id;
    }
}
