<?php

namespace Nerdlichter\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

abstract class Controller extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * @param $template
     * @param array $context
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    protected function createResponse($template, $context = []): Response
    {
        $page = $this->get('twig')->render($template, $context);

        return new Response($page);
    }
}