<?php
declare(strict_types=1);

require_once "Game.php";
require_once "GameList.php";

//Gamelists
$reugene = new GameList();
$john = new GameList();
$jane = new GameList();


//adding Games
$fifa = new Game("Fifa", "Voetbal spelletje",['Action','Sport'], 59.99);
$cod = new Game("Call of Duty", "FPS shooter", ['FPS','Shooter'], 49.99);
$fortnite = new Game("Fortnite", "Adventure", ['FPS', 'Shooter', 'Adventure'], 0);

/*
echo $fifa->printInfo() . "\n \n";
echo $cod->printInfo() . "\n \n";
echo $fortnite->printInfo() . "\n \n";
*/

//Adding Games to the list
$reugene->addGameToList($fifa);
$reugene->addGameToList($cod);
$reugene->addGameToList($fortnite);


//Getting list of games
$gamesList = $reugene->getGameList();
echo "Games from Reugene: \n";
foreach ($gamesList as $game) {
    echo $game->getName() . "\n";
}

