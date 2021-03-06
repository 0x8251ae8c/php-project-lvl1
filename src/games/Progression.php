<?php

namespace Php\Project\Lvl1\Games\Progression;

use Php\Project\Lvl1\Engine;

function generateProgression()
{
    $progression = [];
    $step = rand(1, 10);
    $size = rand(5, 10);
    $startNumber = rand(1, 50);

    for ($i = 0; $i < $size; $i++) {
        $progression[$i] = $startNumber + $step * $i;
    }

    return $progression;
}

function play()
{
    $rules = 'What number is missing in the progression?';
    $questions = [];
    $answers = [];

    for ($i = 0; $i < Engine\NUM_ROUNDS; $i++) {
        $progression = generateProgression();
        $progressionSize = count($progression) - 1;
        $hiddenElementIndex = rand(0, $progressionSize);
        $answers[$i] = $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = "..";
        $questions[$i] = "Question: " . implode(" ", $progression);
    }

    $gameData = [$rules, $questions, $answers];

    Engine\run($gameData);
}
