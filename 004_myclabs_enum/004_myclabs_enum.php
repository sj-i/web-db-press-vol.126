<?php

declare(strict_types=1);

include "vendor/autoload.php";

final class Status extends \MyCLabs\Enum\Enum {
    private const SUCCESS = 'success';
    private const FAILED = 'failed';
}

function (Status $status) {
    if ($status === Status::SUCCESS()) {
        // 成功時の挙動
    }
};
