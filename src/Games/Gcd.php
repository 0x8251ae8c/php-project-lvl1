<?php

namespace Php\Project\Lvl1\Games\Gcd;

use Php\Project\Lvl1\Engine;

function findGcd($a, $b): int
{
    while ($a !== 0 & $b !== 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }

    return ($a + $b);
}

function play(): void
{
    $goalOfTheGame = 'Find the greatest common divisor of given numbers.';
    $gameQuestions = [];
    $rightAnswers = [];

    for ($i = 0; $i < Engine\NUM_OF_ROWS; $i += 1) {
        $number1 = random_int(1, 100);
        $number2 = random_int(1, 100);
        $gcd = findGcd($number1, $number2);

        $gameQuestions[] = "{$number1} {$number2}";
        $rightAnswers[] = (string)$gcd;
    }

    Engine\run($goalOfTheGame, $gameQuestions, $rightAnswers);
}
