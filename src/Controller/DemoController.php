<?php

namespace Nerdlichter\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class SyncController
 * @package Nerdlichter\DemoBundle\Controller
 */
class DemoController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        $this->get('contao.framework')->initialize();

        return $this->createResponse('@ContaoDemo/demo.html.twig');
    }
}