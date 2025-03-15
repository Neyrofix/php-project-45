<?php

namespace BrainGames\src\Games\Progression;

use function BrainGames\src\Engine\runGame;

function prMaker(int $start, int $step): array
{
    $pr = [$start];
    for ($i = 1; $i < 10; $i++) {
        $currentElement = $start + $i * $step;
        $pr[] = $currentElement;
    }
    return $pr;
}

function progression()
{
    $greating = 'What number is missing in the progression?';
    $queAsk = [];

    for ($i = 0; $i < 3; $i++) {
        $start = random_int(1, 30);
        $step = random_int(1, 20);
        $randomIndex = random_int(0, 9);
        $randomProgression = pr_maker($start, $step);
        $rightAnswer = $randomProgression[$randomIndex];
        $randomProgression[$randomIndex] = '..';
        $string = implode(' ', $randomProgression);
        $queAsk[] = [$string, strval($rightAnswer)];
    }
    runGame($greating, $queAsk);
}
