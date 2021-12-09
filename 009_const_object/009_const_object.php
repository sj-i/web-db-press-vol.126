<?php

declare(strict_types=1);

class A {
    public int $i = 0;
    public function set(int $i) {$this->i = $i;}
}
const C = new A;
C->set(42); // 可能
