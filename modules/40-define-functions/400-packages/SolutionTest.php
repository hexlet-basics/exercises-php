<?php

namespace HexletBasics\DefineFunctions\Packages;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $reflection = new \ReflectionFunction(__NAMESPACE__ . '\generatePin');
        $this->assertEquals('string', $reflection->getReturnType()?->getName(), 'You should add a return type declaration!');

        foreach ([1, 7, 42] as $seed) {
            srand($seed);
            $result = generatePin();

            srand($seed);
            $expected = sprintf('%d%d%d%d', rand(0, 9), rand(0, 9), rand(0, 9), rand(0, 9));

            $this->assertSame($expected, $result);
            $this->assertSame(4, strlen($result));
        }
    }
}
