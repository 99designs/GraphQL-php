<?php
declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;

return RectorConfig::configure()
    ->withPaths([
        // __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    // uncomment to reach your current PHP version
    ->withPhpSets(php83: true)
    ->withSets([
        PHPUnitSetList::PHPUNIT_50,
        PHPUnitSetList::PHPUNIT_60,
        PHPUnitSetList::PHPUNIT_70,
        PHPUnitSetList::PHPUNIT_80,
        PHPUnitSetList::PHPUNIT_90,
        ])
    ->withTypeCoverageLevel(0);
