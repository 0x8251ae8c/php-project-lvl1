<?php

namespace Php\Project\Lvl1\BrainEven;

use function cli\line;
use function cli\prompt;

function play(): void
{
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);

    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i += 1) {
        $number = random_int(1, 100);
        $rightAnswer = $number % 2 === 0 ? 'yes' : 'no';

        line("Question: {$number}");
        $answer = prompt("Your answer");

        if ($answer === $rightAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, Bill!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}
