<?php

namespace Hostville\Dorcas;

use Hostville\Dorcas\Services\AbstractService;

class ShippingIntegration extends AbstractService
{
    /**
     * Returns the name of the resource.
     *
     * @return string
     */
    function getName(): string
    {
        return 'ShippingIntegration';
    }
}