<?php

class Product
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
        echo "<br>On construit un product : " . $this->id;
    }
}
