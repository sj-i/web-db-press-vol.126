<?php

declare(strict_types=0);

1.1 | 2; // E_DEPRECATED
1.1 & 2; // E_DEPRECATED
1.1 ^ 2; // E_DEPRECATED
1.1 << 1; // E_DEPRECATED
1.1 % 1.1; // E_DEPRECATED
// strict_types=0の場合にE_DEPRECATED
(fn (int $i) => $i)(1.1);
