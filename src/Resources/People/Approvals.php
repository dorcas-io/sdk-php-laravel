<?php

namespace Hostville\Dorcas\Resources\People;
use Hostville\Dorcas\Resources\AbstractResource;

class Approvals extends AbstractResource
{
    /**
     * Returns the name of the resource.
     *
     * @return string
     */
    function getName(): string
    {
        return 'Approvals';
    }
}