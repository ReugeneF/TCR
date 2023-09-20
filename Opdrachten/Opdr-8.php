<?php

class store{
    public function __construct(public $name, public $description,public $category = "drinks", public $rating = 3)
    {
        $this->name = ucfirst($name);
    }

    function getProduct()
    {
        return  $this->name . " | " . $this->description . " | " . $this->category . " | " . $this->rating . "<br>";
    }
}

$cola = new store("Cola", "Sugar Drink");
$haribo = new store("Haribo", "Sweets, alot of them.", category: "Candy");
$sprite = new store("Sprite", "Sugar Drink",rating: 5 );

echo $cola->getProduct();
echo $haribo->getProduct();
echo $sprite->getProduct();
