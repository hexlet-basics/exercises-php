<?php

namespace HexletBasics\Loops\WhileLoop;

function printCountdown(int $seconds): void
{
    // BEGIN
    $i = $seconds;
    while ($i >= 1) {
        print_r("{$i}\n");
        $i = $i - 1;
    }
    print_r('Go!');
    // END
}
