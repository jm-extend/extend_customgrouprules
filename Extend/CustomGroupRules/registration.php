<?php
/**
 * Copyright © Extend. All rights reserved.
 * This add-on module allows to hide PDP offers based on customer groups
 *
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Extend_CustomGroupRules',
    __DIR__
);
