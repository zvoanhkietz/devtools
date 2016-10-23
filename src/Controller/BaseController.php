<?php

namespace App\Controller;

use Interop\Container\ContainerInterface;

/**
 * Test View point controller
 */
class BaseController
{

    /**
     * Slim App
     * @var \Slim\App;
     */
    protected $ci;

    /**
     * Construct
     * 
     * @param \Interop\Container\ContainerInterface $ci
     */
    public function __construct(ContainerInterface $ci)
    {
        $this->ci = $ci;
    }
}
