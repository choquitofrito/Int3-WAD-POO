<?php


namespace Shop\BasketFake;

class Product
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
        echo "<br>On construit, DANS BASKETFAKE, un product : " . $this->id;
    }
}
