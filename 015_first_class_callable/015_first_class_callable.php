<?php

declare(strict_types=1);

$closure = strlen(...); // ↓と等価
$closure = \Closure::fromCallable('strlen');
