<?php

namespace Php\Project\Lvl1\Games\Calc;

use Php\Project\Lvl1\Engine;

function play()
{
    $rules = 'What is the result of the expression?';
    $questions = [];
    $answers = [];

    $operators = ['+', '-', '*'];

    for ($i = 0; $i < Engine\NUM_ROUNDS; $i++) {
        $operator = $operators[array_rand($operators)];
        $number1 = rand(1, 10);
        $number2 = rand(1, 10);

        $questions[$i] = "Question: {$number1} {$operator} {$number2}";

        switch ($operator) {
            case '+':
                $answers[$i] = $number1 + $number2;
                break;
            case '-':
                $answers[$i] = $number1 - $number2;
                break;
            case '*':
                $answers[$i] = $number1 * $number2;
                break;
        }
    }

    $gameData = [$rules, $questions, $answers];

    Engine\run($gameData);
}
