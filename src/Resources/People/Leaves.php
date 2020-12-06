<?php

namespace Hostville\Dorcas\Resources\People;
use Hostville\Dorcas\Resources\AbstractResource;

class Leaves extends AbstractResource
{
    /**
     * Returns the name of the resource.
     *
     * @return string
     */
    function getName(): string
    {
        return 'Leaves';
    }
}