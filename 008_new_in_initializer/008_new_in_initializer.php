<?php

declare(strict_types=1);

class A {}
class B {
    public function __construct(int $i) {}
}
class C {
    public function __construct(int $x) {}
}

function f(
    $a = new A,
    $b = new B(1),
    $c = new C(x: 1),
) {
}
static $static = new A;
const C = new A;
#[TestAttribute(new A)]
class Test {
    public function __construct(
        public $prop = new A,
    ) {
    }
}
