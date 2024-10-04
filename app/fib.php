<?php

declare(strict_types=1);

function fib(int $n): float
{
    if (0 === $n || 1 === $n) {
        return $n;
    }

    return fib($n - 1) + fib($n - 2);
}

$start = microtime(true);

echo fib(40);
echo "\n";
echo number_format(microtime(true) - $start, 2);
echo "\n";
