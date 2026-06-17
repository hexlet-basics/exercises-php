<?php

namespace HexletBasics\DefineFunctions\TypeAnnotations;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        $reflection = new \ReflectionFunction(__NAMESPACE__ . '\wordMultiply');
        $parameterTypes = array_map(
            fn ($parameter) => $parameter->getType()?->getName(),
            $reflection->getParameters()
        );
        $this->assertEquals(['string', 'int'], $parameterTypes, 'You should add type declarations for parameters!');
        $this->assertEquals('string', $reflection->getReturnType()?->getName(), 'You should add a return type declaration!');

        $this->assertEquals('python', wordMultiply('python', 1));
        $this->assertEquals('pythonpythonpython', wordMultiply('python', 3));
        $this->assertEquals('', wordMultiply('java', 0));
    }
}
