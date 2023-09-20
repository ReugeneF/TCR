<?php

class store{
    public function __construct(public $name, public $description,public $category = "drinks", public $rating = 3)
    {
        $this->name = ucfirst($name);
    }
}

$cola = new store("Cola", "Sugar Drink");
$haribo = new store("Haribo", "Sweets, alot of them.", category: "Candy");
$sprite = new store("Sprite", "Sugar Drink",rating: 5 );

echo $cola->name . " | " . $cola->description . " | " . $cola->category . " | " . $cola->rating . "<br>";
echo $haribo->name . " | " . $haribo->description . " | " . $haribo->category . " | " . $haribo->rating . "<br>" ;
echo $sprite->name . " | " . $sprite->description . " | " . $sprite->category . " | " . $sprite->rating ;
