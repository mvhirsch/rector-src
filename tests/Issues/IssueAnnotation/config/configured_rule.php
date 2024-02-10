<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\DowngradePhp80\Rector\MethodCall\DowngradeNamedArgumentRector;

return RectorConfig::configure()
    ->withRules([DowngradeNamedArgumentRector::class]);
