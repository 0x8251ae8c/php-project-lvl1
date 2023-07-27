<?php

namespace Php\Project\Lvl1\BrainCalc;

use function cli\line;
use function cli\prompt;

function play(): void
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);

    line('What is the result of the expression?');

    for ($i = 0; $i < 3; $i += 1) {
        $number1 = random_int(-10, 10);
        $number2 = random_int(-10, 10);
        $operator = ['+', '-', '*'][random_int(0, 2)];

        $rightAnswer = (string) match($operator) {
            '+' => $number1 + $number2,
            '-' => $number1 - $number2,
            '*' => $number1 * $number2
        };

        line("Question: {$number1} {$operator} {$number2}");
        $answer = prompt("Your answer");

        if ($answer === $rightAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
