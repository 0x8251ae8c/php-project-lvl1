<?php

namespace Php\Project\Lvl1\Engine;

use function cli\line;
use function cli\prompt;

const NUM_OF_ROWS = 3;

function run($goalOfTheGame, $questions, $answers): void
{
    line("Welcome to the Brain Game!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);

    line("{$goalOfTheGame}");

    for ($i = 0; $i < NUM_OF_ROWS; $i += 1) {
        line("Question: {$questions[$i]}");
        $userAnswer = prompt("Your answer");

        if ($userAnswer === $answers[$i]) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answers[$i]}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
