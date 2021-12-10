<?php

declare(strict_types=1);

interface TestInterface {
    public const TEST_CONSTANT = 1;
}

class TestClass implements TestInterface {
    public const TEST_CONSTANT = 2; // エラー
}

interface ChildInterface extends TestInterface {
    public const TEST_CONSTANT = 2; // エラー
}

class ParentClass implements TestInterface {}

class ChildClass extends ParentClass {
    public const TEST_CONSTANT = 2; // 可能
}
