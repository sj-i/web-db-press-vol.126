<?php

declare(strict_types=1);

function inner(): void {
    $received = Fiber::suspend('from fiber');
    echo $received, PHP_EOL;
}
$fiber = new Fiber(function (): void {
    inner();
});

$from_fiber = $fiber->start();
echo $from_fiber, PHP_EOL;
$fiber->resume('to fiber');