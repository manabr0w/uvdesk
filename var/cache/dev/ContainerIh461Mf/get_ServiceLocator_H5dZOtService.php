<?php

namespace ContainerIh461Mf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H5dZOtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H_5dZOt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H_5dZOt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'container' => ['services', 'service_container', 'getServiceContainerService', true],
        ], [
            'container' => '?',
        ]);
    }
}
