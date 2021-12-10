<?php

declare(strict_types=1);

class TestClass {
    public const TEST_CONSTANT = 1;
}

class TestChild extends TestClass {
    public const TEST_CONSTANT = 2;
}
