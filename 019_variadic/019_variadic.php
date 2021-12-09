<?php

declare(strict_types=1);

function f(...$params) {}
f(1); // $paramsは[1]
f(1, 2); // $paramsは[1, 2]
