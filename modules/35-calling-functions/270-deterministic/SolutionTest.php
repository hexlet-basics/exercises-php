<?php

namespace HexletBasics\CallingFunctions\Deterministic;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';
        $randomRoll = $this->getActualOutputForAssertion();
        $this->assertThat(
            $randomRoll,
            $this->logicalAnd(
                $this->greaterThanOrEqual(0),
                $this->lessThanOrEqual(10)
            )
        );
    }
}
