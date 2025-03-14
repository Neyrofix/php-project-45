<?php

namespace BrainGames\src\Games\Prime;

use function BrainGames\src\Engine\runGame;

function is_prime($n)
{
    if ($n <= 1) {
        return false;
    }
    if ($n == 2) {
        return true;
    }
    if ($n % 2 == 0) {
        return false;
    }
    for ($i = 3; $i * $i <= $n; $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $greating = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $queAsk = [];

    for ($i = 0; $i < 3; $i++) {
        $val = random_int(1, 100);
        if (is_prime($val)) {
            $queAsk[] = [$val, 'yes'];
        } else {
            $queAsk[] = [$val, 'no'];
        }
    }

    runGame($greating, $queAsk);
}
