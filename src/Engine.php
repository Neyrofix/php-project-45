<?php

namespace BrainGames\src\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\src\Cli\greating;

function runGame(string $gameDescription, array $arr)
{
    $name = greating();
    line($gameDescription);

    foreach ($arr as $a) {
        [$num, $correctAnswer] = $a;
        line("Question: {$num}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer !== $correctAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '$correctAnswer'.");
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, {$name}!");
}
