<?php

declare(strict_types=1);

namespace CronnerTests\Objects;

class SimpleTestObjectWithDependency
{

    public function __construct(FooService $service)
    {
    }

    /**
     * @cronner-task
     */
    public function run()
    {
    }
}
