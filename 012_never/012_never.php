<?php

declare(strict_types=1);

function redirect(string $url): never {
    header('Location: ' . $url);
    exit;
}
