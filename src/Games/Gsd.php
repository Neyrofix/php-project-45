<?php

namespace BrainGames\src\Games\Gsd;

use function BrainGames\src\Engine\runGame;

function evklid(int $a, int $b): string
{
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return strval($a);
}


function gsd()
{
    $greating = 'Find the greatest common divisor of given numbers.';
    $queAsk = [];

    for ($i = 0; $i < 3; $i++) {
        $val1 = random_int(1, 100);
        $val2 = random_int(1, 100);
        $queAsk[] = ["{$val1} {$val2}",evklid($val1, $val2)];
    }
    runGame($greating, $queAsk);
}
