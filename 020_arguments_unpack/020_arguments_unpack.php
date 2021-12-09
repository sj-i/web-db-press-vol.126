<?php

declare(strict_types=1);

function f(...$params) {
    var_dump($params);
}

$args = [1, 2, 3];
f(...$args); // f(1, 2, 3) と同等
