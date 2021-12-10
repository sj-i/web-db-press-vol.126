<?php

declare(strict_types=1);

interface TestInterface {
    public const TEST_CONSTANT1 = 1;
    public final const TEST_CONSTANT2 = 1;
}

class TestClass implements TestInterface {
    public const TEST_CONSTANT1 = 2; // 可能
    public const TEST_CONSTANT2 = 2; // エラー
}
