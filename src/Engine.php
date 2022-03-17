<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

const NUM_ROUNDS = 3;

function run(array $gameData)
{
    $rules = $gameData[0];
    $questions = $gameData[1];
    $answers = $gameData[2];

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");

    line($rules);

    for ($i = 0; $i < NUM_ROUNDS; $i++) {
        line($questions[$i]);
        $userAnswer = prompt('Your answer');

        if ($userAnswer !== (string)$answers[$i]) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answers[$i]}'.");
            line("Let's try again, {$name}!");
            return;
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}
