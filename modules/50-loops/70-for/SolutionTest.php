<?php

namespace HexletBasics\Loops\ForLoop;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'index.php';

        $this->assertEquals('my_photo.png', normalizeFilename('my photo.png'));
        $this->assertEquals('final_report.pdf', normalizeFilename('final report.pdf'));
        $this->assertEquals('already_ready.txt', normalizeFilename('already_ready.txt'));
        $this->assertEquals('two__spaces.txt', normalizeFilename('two  spaces.txt'));
    }
}
