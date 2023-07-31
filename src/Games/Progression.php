<?php

namespace Php\Project\Lvl1\Games\Progression;

use Php\Project\Lvl1\Engine;

function generateProgression()
{
    $step = random_int(1, 10);
    $size = random_int(5, 10);
    $startNumber = random_int(1, 50);
    $progression = [$startNumber];

    for ($i = 1; $i < $size; $i += 1) {
        $progression[$i] = $progression[$i - 1] + $step;
    }

    return $progression;
}

function play(): void
{
    $goalOfTheGame = 'What number is missing in the progression?';
    $gameQuestions = [];
    $rightAnswers = [];

    for ($i = 0; $i < Engine\NUM_OF_ROWS; $i += 1) {
        $progression = generateProgression();
        $progressionSize = count($progression);
        $hiddenElementIndex = random_int(0, $progressionSize - 1);
        $rightAnswers[] = (string)$progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = "..";
        $gameQuestions[] = implode(' ', $progression);
    }

    Engine\run($goalOfTheGame, $gameQuestions, $rightAnswers);
}
