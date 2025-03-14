<?php

namespace BrainGames\src\Games\Even;

use function BrainGames\src\Engine\runGame;

function even()
{
    $greating = 'Answer "yes" if the number is even, otherwise answer "no".';
    $queAsk = [];

    for ($i = 0; $i < 3; $i++) {
        $val = random_int(1, 100);
        if ($val % 2 === 0) {
            $queAsk[] = [$val, 'yes'];
        } else {
            $queAsk[] = [$val, 'no'];
        }
    }

    runGame($greating, $queAsk);
}
