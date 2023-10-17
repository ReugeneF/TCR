<?php

class Game
{

    public function __construct(private string $naam, private string $beschrijving, private array $tags, private float $prijs)
    {

    }

    function printInfo() :string
    {
        return "Naam: " . $this->naam . "\nBeschrijving: " . $this->beschrijving . "\nTags: " . implode("," , $this->tags) . "/nPrijs: €" . number_format($this->prijs, 2);
    }

    function getName() :string
    {
        return $this->naam;
    }

}