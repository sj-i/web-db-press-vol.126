<?php

declare(strict_types=1);

class ClassName {
    public function method_name(): void {}
    static public function static_method(): void {}
}

$object = new ClassName();

// strlen()
$callable = 'strlen';
// $object->method()
$callable = [$object, 'method_name'];
// ClassName::static_method()
$callable = ['ClassName', 'static_method'];
