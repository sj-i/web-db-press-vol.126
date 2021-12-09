<?php

declare(strict_types=1);

enum Status {
    case Success;
    case Failed;
}

function (Status $status) {
    if ($status === Status::Success) {
        // 成功時の挙動
    }
};