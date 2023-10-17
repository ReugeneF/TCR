<?php

class GameList
{
    private array $gamelistitems = [];

    public function addGameToList(Game $game)
    {
        $this->gamelistitems[] = $game;
    }

    public function getGameList(){
        return $this->gamelistitems;
    }

}