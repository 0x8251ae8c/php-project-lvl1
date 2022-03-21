<?php

namespace Php\Project\Lvl1\Games\Gcd;

use Php\Project\Lvl1\Engine;

function findGcd(int $a, int $b): int
{
    $gcd = 0;
    $min = $a < $b ? $a : $b;

    for ($i = 1; $i <= $min / 2; $i++) {
        if ($a % $i === 0 && $b % $i === 0) {
            $gcd = $i;
        }
    }

    return $gcd;
}

function play()
{
    $rules = 'Find the greatest common divisor of given numbers.';

    for ($i = 0; $i < Engine\NUM_ROUNDS; $i++) {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $questions[$i] = "Question: {$a} {$b}";
        $answers[$i] = findGcd($a, $b);
    }

    $gameData[0] = $rules;
    $gameData[1] = $questions;
    $gameData[2] = $answers;

    Engine\run($gameData);
}
