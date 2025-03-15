<?php

namespace BrainGames\src\Games\Calc;

use function BrainGames\src\Engine\runGame;

function calculate(int $val1, int $val2, string $randomOperation)
{
    switch ($randomOperation) {
        case '+':
            return ["{$val1} + {$val2}", strval($val1 + $val2)];
        case '-':
            return ["{$val1} - {$val2}", strval($val1 - $val2)];
        case '*':
            return ["{$val1} * {$val2}", strval($val1 * $val2)];
    }
}

function calc()
{
    $greating = 'What is the result of the expression?';
    $queAsk = [];
    $operation = ['+', '-', '*'];

    for ($i = 0; $i < 3; $i++) {
        $randomIndex = random_int(0, count($operation) - 1);
        $val1 = random_int(1, 10);
        $val2 = random_int(1, 10);
        $queAsk[] = calculate($val1, $val2, $operation[$randomIndex]);
    }
    runGame($greating, $queAsk);
}
