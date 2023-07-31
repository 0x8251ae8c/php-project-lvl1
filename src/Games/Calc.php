<?php

namespace Php\Project\Lvl1\Games\Calc;

use Php\Project\Lvl1\Engine;

function play(): void
{
    $goalOfTheGame = 'What is the result of the expression?';
    $gameQuestions = [];
    $rightAnswers = [];

    for ($i = 0; $i < Engine\NUM_OF_ROWS; $i += 1) {
        $number1 = random_int(-10, 10);
        $number2 = random_int(-10, 10);
        $operator = ['+', '-', '*'][random_int(0, 2)];

        $gameQuestions[] = "{$number1} {$operator} {$number2}";
        $rightAnswers[] = (string) match ($operator) {
            '+' => $number1 + $number2,
            '-' => $number1 - $number2,
            '*' => $number1 * $number2
        };
    }

    Engine\run($goalOfTheGame, $gameQuestions, $rightAnswers);
}
