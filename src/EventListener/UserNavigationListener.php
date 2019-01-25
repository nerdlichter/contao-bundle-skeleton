<?php

namespace Nerdlichter\DemoBundle\EventListener;

use Nerdlichter\DemoBundle\Constants;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class UserNavigationListener
 * @package Nerdlichter\DemoBundle\EventListener
 */
class UserNavigationListener
{
    /**
     * @var RequestStack
     */
    protected $requestStack;

    /**
     * @var RouterInterface
     */
    protected $router;
    /**
     * @var ContainerInterface|null
     */
    private $container;

    /**
     * UserNavigationListener constructor.
     * @param RequestStack $requestStack
     * @param RouterInterface $router
     * @param ContainerInterface|null $container
     */
    public function __construct(RequestStack $requestStack, RouterInterface $router, ContainerInterface $container = null)
    {
        $this->requestStack = $requestStack;
        $this->router = $router;
        $this->container = $container;
    }

    /**
     * @param $arrModules
     * @param $blnShowAll
     * @return mixed
     */
    public function onGetUserNavigation($arrModules, $blnShowAll)
    {
        $currentRouteName = $this->requestStack->getCurrentRequest()->attributes->get('_route');

        $arrModules['demo'] = [
            'label'   => 'Demo',
            'title'   => 'Collapse node',
            'class'   => '',
            'modules' => [
                'demo' => [
                    'label'    => 'SuperDuper',
                    'title'    => '',
                    'class'    => 'navigation demo',
                    'href'     => $this->router->generate('demo_index'),
                    'isActive' => $currentRouteName === 'demo_index',
                ],
            ]
        ];

        return $arrModules;
    }
}