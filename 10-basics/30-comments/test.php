<?php

require __DIR__ . '/../vendor/autoload.php';

use mikehaertl\shellcommand\Command;

$command = new Command("php " . __DIR__ . "/10-hello-world.php");
$command->execute();
echo $command->getOutput();
echo $command->getError();
exit($command->getExitCode());
