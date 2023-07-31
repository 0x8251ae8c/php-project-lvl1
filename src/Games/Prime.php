<?php

namespace Php\Project\Lvl1\Games\Prime;

use Php\Project\Lvl1\Engine;

function isPrimeNumber(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number / 2; $i += 1) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function play(): void
{
    $goalOfTheGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameQuestions = [];
    $rightAnswers = [];

    for ($i = 0; $i < Engine\NUM_OF_ROWS; $i += 1) {
        $number = random_int(1, 100);
        $gameQuestions[] = "{$number}";
        $rightAnswers[] = isPrimeNumber($number) ? 'yes' : 'no';
    }

    Engine\run($goalOfTheGame, $gameQuestions, $rightAnswers);
}
