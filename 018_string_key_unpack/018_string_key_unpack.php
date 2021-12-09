<?php

declare(strict_types=1);

$assoc1 = ['a' => 1, 'b' => 2];
$assoc2 = ['c' => 3, 'd' => 4];
// ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4]
$merged_assoc = [...$assoc1, ...$assoc2];

var_dump($merged_assoc);