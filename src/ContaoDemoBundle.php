<?php

namespace Nerdlichter\DemoBundle;

use Nerdlichter\DemoBundle\DependencyInjection\DemoExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoDemoBundle extends Bundle
{
    /**
     * Register extension
     */
    public function getContainerExtension()
    {
        return new DemoExtension();
    }
}