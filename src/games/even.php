<?php

namespace Php\Project\Lvl1\Games\Even;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        if (playRound() !== 'win') {
            line("Let's try again, {$name}!");
            return;
        }
    }

    line("Congratulations, {$name}!");
}

function playRound()
{
    $number = rand(1, 100);
    $rightAnswer = $number % 2 === 0 ? "no" : "yes";

    line("Question: {$number}");
    $userAnswer = prompt('Your answer');

    if ($userAnswer !== $rightAnswer) {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
        return 'lose';
    }

    line('Correct!');
    return 'win';
}
