<?php

namespace Php\Project\Lvl1\Games\Even;

use Php\Project\Lvl1\Engine;

function play()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';

    for ($i = 0; $i < Engine\NUM_ROUNDS; $i++) {
        $number = rand(1, 100);
        $questions[$i] = "Question: {$number}";
        $answers[$i] = $number % 2 === 0 ? "no" : "yes";
    }

    $gameData[0] = $rules;
    $gameData[1] = $questions;
    $gameData[2] = $answers;

    Engine\run($gameData);
}
