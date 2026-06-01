<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/modules');

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
    ])
    ->setFinder($finder);
