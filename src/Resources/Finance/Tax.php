<?php

namespace Hostville\Dorcas\Resources\Finance;


use Hostville\Dorcas\Resources\AbstractResource;

class Tax extends AbstractResource
{
    /**
     * Returns the name of the resource.
     *
     * @return string
     */
    function getName(): string
    {
        return 'Tax';
    }
}