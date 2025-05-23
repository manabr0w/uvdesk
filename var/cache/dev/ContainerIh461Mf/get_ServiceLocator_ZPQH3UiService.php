<?php

namespace ContainerIh461Mf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZPQH3UiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZPQH3Ui' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZPQH3Ui'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'microsoftIntegration' => ['privates', 'Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\MicrosoftIntegration', 'getMicrosoftIntegrationService', false],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'microsoftIntegration' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\MicrosoftIntegration',
            'translator' => '?',
        ]);
    }
}
