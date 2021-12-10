<?php

declare(strict_types=1);

class ParentClass {
    public static function f(?int $i = null): int {
        static $static = 0;
        if (isset($i)) {
            $static = $i;
        }
        return $static;
    }
}

ParentClass::f(42);
eval('class Child extends ParentClass {}');
Child::f(43);
assert(ParentClass::f() === 42);
assert(Child::f() === 43);
