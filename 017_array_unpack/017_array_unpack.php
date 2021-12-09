<?php

declare(strict_types=1);

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
// [1, 2, 3, 4, 5, 6]
$merged_array = [...$array1, ...$array2];

var_dump($merged_array);