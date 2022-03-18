<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\CallingFunctions\Call;

use PHPUnit\Framework\TestCase;

\HexletBasics\Functions\runScript();

class Test extends TestCase
{
    public function test()
    {
        require 'index.php';
        $randomSide = $this->getActualOutput();
        $this->assertLessThanOrEqual(6, $randomSide);
        $this->assertGreaterThanOrEqual(1, $randomSide);
    }
}
