<?php

class Basket
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
        echo "<br>On construit un basket : " . $this->id;
    }
}
