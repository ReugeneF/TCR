<?php

class person{

    public $titel = "Colleague: ";

    public function __construct(public $name, public $surname, public $age){

    }
}

$john = new person("John", "Doe", 18);
$jake = new person("Jake", "Frans", 21);
$tom = new person("Tom", "Mie", 38);


var_dump($john);
var_dump($jake);
var_dump($tom);

echo $john->name . "<br>";
echo $jake->name . "<br>";
echo $tom->name . "<br>";
