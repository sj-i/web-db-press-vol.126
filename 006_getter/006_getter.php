<?php

declare(strict_types=1);

class TestClass {
    public function __construct(private int $i) {}

    public function getI() {
        return $this->i;
    }
}
