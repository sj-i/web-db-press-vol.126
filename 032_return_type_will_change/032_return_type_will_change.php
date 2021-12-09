<?php

declare(strict_types=1);

// PHP 8.1で警告が出ない、7.4でも正常動作
class MyDateTime extends \DateTime {
    /** @return \DateTime|false */
    #[ReturnTypeWillChange]
    public function modify(string $modifier) {
        return false;
    }
}
