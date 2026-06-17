<?php

namespace HexletBasics\Conditionals\IfElse;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test()
    {
        require 'Solution.php';

        $this->assertEquals('https://yandex.ru', normalizeUrl('yandex.ru'));
        $this->assertEquals('https://yandex.ru', normalizeUrl('http://yandex.ru'));
        $this->assertEquals('https://yandex.ru', normalizeUrl('https://yandex.ru'));
        $this->assertEquals('https://httpsecurity.com', normalizeUrl('httpsecurity.com'));
        $this->assertEquals(
            'https://httpbin.org/redirect-to?url=http://google.com',
            normalizeUrl('https://httpbin.org/redirect-to?url=http://google.com')
        );
        $this->assertEquals(
            'https://httpbin.org/redirect-to?url=https://google.com',
            normalizeUrl('httpbin.org/redirect-to?url=https://google.com')
        );
        $this->assertEquals(
            'https://httpbin.org/redirect-to?url=http://google.com',
            normalizeUrl('httpbin.org/redirect-to?url=http://google.com')
        );
    }
}
