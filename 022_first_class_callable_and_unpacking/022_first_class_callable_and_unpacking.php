<?php

declare(strict_types=1);

$closure = strlen(...);
// ↑は↓の短縮記法とも考えられる
$closure = fn (...$args) => strlen(...$args);
