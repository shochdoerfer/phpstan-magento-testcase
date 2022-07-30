<?php

declare(strict_types=1);

namespace AutoloaderTestcase;

class Main
{
    private PureDependency $pureDep;
    private Dependency $dep;

    public function __construct(PureDependencyFactory $pureDep, DependencyFactory $dep)
    {
        // PureDependencyFactory does not exist, it will be generated by the phpstan-magento autoloader
        $this->pureDep = $pureDep->create();

        // DependencyFactory does exists, the concrete factory implementation will be used. This will be ignored by
        // the phpstan-magento autoloader because the class exists and can be autoloaded
        $this->dep = $dep->create(false);
    }

    public function doSomething(): bool
    {
        return $this->pureDep->doSomething();
    }

    public function doSomethingElse(): bool
    {
        return $this->dep->doSomethingElse();
    }
}