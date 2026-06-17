<?php

namespace HexletBasics\Exercise;

use PHPUnit\Framework\TestCase as BaseTestCase;
use ReflectionObject;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $solutionPath = dirname((new ReflectionObject($this))->getFileName()) . '/Solution.php';
        require $solutionPath;
    }
}
