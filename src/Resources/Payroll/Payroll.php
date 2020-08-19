<?php

namespace Hostville\Dorcas\Resources\Payroll;


use Hostville\Dorcas\Resources\AbstractResource;

class Payroll extends AbstractResource
{

    /**
     * Returns the name of the resource.
     *
     * @return string
     */
    function getName(): string
    {
        return 'Payroll';
    }
}