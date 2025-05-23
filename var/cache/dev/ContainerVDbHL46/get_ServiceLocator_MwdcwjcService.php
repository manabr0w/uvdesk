<?php

namespace ContainerVDbHL46;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MwdcwjcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mwdcwjc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mwdcwjc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'microsoftIntegration' => ['privates', 'Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\MicrosoftIntegration', 'getMicrosoftIntegrationService', false],
            'userService' => ['services', 'user.service', 'getUser_ServiceService', false],
        ], [
            'entityManager' => '?',
            'microsoftIntegration' => 'Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\MicrosoftIntegration',
            'userService' => '?',
        ]);
    }
}
