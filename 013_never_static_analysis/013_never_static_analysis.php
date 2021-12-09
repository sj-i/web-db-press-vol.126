<?php

declare(strict_types=1);

function redirect(string $url): never {
    header('Location: ' . $url);
    exit;
}

$f = function (int $i) {
    if ($i < 42) {
        redirect('https://infiniteloop.co.jp');
    }
    // 静的解析器で$i >=42と推論
};
