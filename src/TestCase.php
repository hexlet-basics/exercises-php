<?php

namespace HexletBasics\Exercise;

use PHPUnit\Framework\TestCase as BaseTestCase;
use ReflectionObject;

abstract class TestCase extends BaseTestCase
{
    protected string $solutionOutput = '';

    protected function setUp(): void
    {
        parent::setUp();

        $solutionPath = dirname((new ReflectionObject($this))->getFileName()) . '/Solution.php';

        ob_start();
        require $solutionPath;
        $this->solutionOutput = (string) ob_get_clean();

        if ($this->solutionOutput !== '') {
            fwrite(STDOUT, $this->solutionOutput . "\n");
        }
    }

    protected function assertOutput(string $expected): void
    {
        $this->assertSame($expected, $this->solutionOutput);
    }

    protected function assertOutputOf(callable $callback, string $expected): void
    {
        ob_start();
        $callback();
        $output = (string) ob_get_clean();

        if ($output !== '') {
            fwrite(STDOUT, $output . "\n");
        }

        $this->assertSame($expected, $output);
    }
}
