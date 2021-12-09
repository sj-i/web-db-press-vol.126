<?php

declare(strict_types=1);

class TestClass {
    public function __construct(
        // 読み込み専用のプロパティ定義
        public readonly int $i,
    ) {
    }
}
