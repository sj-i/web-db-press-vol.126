<?php

declare(strict_types=1);

spl_autoload_register(function (string $name) {
    echo 'autoloader invoked', PHP_EOL;
    eval('class A {const VALUE = 42;}');
});

const C = A::VALUE; // オートローダが動作し得る
