<?php

declare(strict_types=1);

function f(...$params) {
    var_dump($params);
}

$args = ['a' => 1, 'b' => 2];
f(...$args); // f(a: 1, b: 2) と同等
