<?php

namespace BrainGames\src\Games\Progression;

use function BrainGames\src\Engine\runGame;

function random_prog(int $start, int $step): array
{
    $pr = [$start];
    for ($i = 1; $i < 10; $i++) {
        $currentElement = $start + $i * $step;
        $pr[] = $currentElement;
    }
    return $pr;
}
print_r(random_prog(2, 5));
/*
function progression()
{
    $greating = 'What number is missing in the progression?';
    $queAsk = [];

    for ($i = 0; $i < 3; $i++) {
        $val1 = random_int(1, 100);
        $val2 = random_int(1, 100);
        $queAsk[] = ["{$val1} {$val2}",evklid($val1, $val2)];
    }
    runGame($greating, $queAsk);
}
*/