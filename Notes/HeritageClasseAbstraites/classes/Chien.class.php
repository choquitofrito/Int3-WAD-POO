<?php

class Chien extends Animal
{
    // le constructeur sera pris du parent


    public function aboyer (){
        echo "<br>WARFFFFFFFFFFFFFFFFF!";
    }
    public function manger(): void
    {
        echo "<br>Je mange de chats!!!";
    }
    
}
