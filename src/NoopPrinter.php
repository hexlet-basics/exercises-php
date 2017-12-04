<?php
namespace HexletBasics;

class NoopPrinter extends \PHPUnit\TextUI\ResultPrinter implements \PHPUnit\Framework\TestListener
{
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
    {
    }
    public function startTest(\PHPUnit\Framework\Test $test)
    {
    }
    public function endTest(\PHPUnit\Framework\Test $test, $time)
    {
    }
}
