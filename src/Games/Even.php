<?php

namespace Php\Project\Lvl1\Games\Even;

use Php\Project\Lvl1\Engine;

function play(): void
{
    $goalOfTheGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameQuestions = [];
    $rightAnswers = [];

    for ($i = 0; $i < Engine\NUM_OF_ROWS; $i += 1) {
        $number = random_int(1, 100);
        $gameQuestions[] = "{$number}";
        $rightAnswers[] = $number % 2 === 0 ? 'yes' : 'no';
    }

    Engine\run($goalOfTheGame, $gameQuestions, $rightAnswers);
}
