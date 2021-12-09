<?php

declare(strict_types=1);

class Mutable {
    public int $i = 0;
}

class TestClass {
    public readonly Mutable $object;
    public function __construct() {
        $this->object = new Mutable;
    }
}
$test = new TestClass();
$test->object->i = 42; // 変更できる
$test->object = new Mutable; // これはできない
