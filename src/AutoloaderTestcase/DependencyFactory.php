<?php

declare(strict_types=1);

namespace AutoloaderTestcase;

class DependencyFactory
{
    public function create(bool $defaultValue): Dependency
    {
        return new Dependency($defaultValue);
    }
}
