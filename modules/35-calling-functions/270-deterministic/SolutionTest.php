<?php

namespace HexletBasics\CallingFunctions\Deterministic;

use HexletBasics\Exercise\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
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
