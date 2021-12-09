<?php

declare(strict_types=1);

class MyDateTime extends \DateTime {
    // E_DEPRECATEDの警告が出るのみ
    public function modify(string $modifier) {
        return false;
    }
}
