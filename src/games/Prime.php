<?php

namespace Php\Project\Lvl1\Games\Prime;

use Php\Project\Lvl1\Engine;

function play()
{
    $rules = 'Answer "yes" if the number is prime, otherwise answer "no".';
    $questions = [];
    $answers = [];

    for ($i = 0; $i < Engine\NUM_ROUNDS; $i++) {
        $number = rand(1, 100);
        $questions[$i] = "Question: {$number}";
        $answers[$i] = isPrimeNumber($number) ? "yes" : "no";
    }

    $gameData = [$rules, $questions, $answers];

    Engine\run($gameData);
}

function isPrimeNumber(int $number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
