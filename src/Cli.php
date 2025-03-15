<?php

/* Работа с командной строкой */

namespace BrainGames\src\Cli;

use function cli\line;
use function cli\prompt;

/* Приветствие и запрос имени */
function greating()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
