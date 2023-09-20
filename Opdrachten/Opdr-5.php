<?php

class candyshop
{
    public function __construct(public $titel, public $category, public $price)
    {
        $this->titel = strtolower($titel);
        $this->category = strtoupper($category);
    }

    function showSalesPrice()
    {
        return number_format($this->price * 1.09, 2);
    }

}

$sweetyBag = new candyshop("Candy Bag", "Candy", 10);
echo $sweetyBag->titel . "<br>Category: ";
echo $sweetyBag->category . "<br>price: ";
echo $sweetyBag->price . " inc BTW: ";
echo $sweetyBag->showSalesPrice() . "";


