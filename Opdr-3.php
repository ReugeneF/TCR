<?php

    class candyshop{
        public function __construct(public $titel, public $price)
        {

        }

        function showSalesPrice(){
           return number_format($this->price *1.09, 2);
        }
    }

    $sweetyBag = new candyshop("Candy Bag", 10);
    echo $sweetyBag->titel." price: ";
    echo $sweetyBag->price." inc BTW: ";
    echo $sweetyBag->showSalesPrice()."";

