<?php // phpcs:ignore PSR1.Files.SideEffects

namespace HexletBasics\Strings\Quotes;

use PHPUnit\Framework\TestCase;


class Test extends TestCase
{
     public function test()
      {
         \HexletBasics\Functions\runScript();
          $expected = "\"Khal Drogo's favorite word is \"athjahakar\"\"";
          $this->expectOutputString($expected);
          require 'index.php';
      }
}
