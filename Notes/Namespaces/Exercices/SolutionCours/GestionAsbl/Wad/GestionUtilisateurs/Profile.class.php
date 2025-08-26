<?php
namespace GestionAsbl\Wad\GestionUtilisateurs;

class Profile
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
        echo "<br>On construit, DANS WEB, un Profile : " . $this->id;
    }
}
