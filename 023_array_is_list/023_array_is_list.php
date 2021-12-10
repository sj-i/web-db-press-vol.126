<?php

declare(strict_types=1);

array_is_list([1, 2]); // true
array_is_list(['1' => 1, '0' => 2]); // false
array_is_list(['0' => 1, '2' => 2]); // false
array_is_list(['a' => 1, 'b' => 2]); // false

