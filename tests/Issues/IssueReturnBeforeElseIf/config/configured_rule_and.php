<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\EarlyReturn\Rector\If_\ChangeAndIfToEarlyReturnRector;
use Rector\EarlyReturn\Rector\If_\RemoveAlwaysElseRector;

return RectorConfig::configure()
    ->withRules([ChangeAndIfToEarlyReturnRector::class, RemoveAlwaysElseRector::class]);
