<?php

declare(strict_types=1);

namespace AutoloaderTestcase;

class Dependency
{
    private bool $defaultValue;

    public function __construct(bool $defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    public function doSomethingElse(): bool
    {
        return $this->defaultValue;
    }
}
