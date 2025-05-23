<?php

namespace ContainerVDbHL46;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrivilegeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\CoreFrameworkBundle\Controller\Privilege' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Controller\Privilege
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/Privilege.php';

        $container->services['Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege'] = $instance = new \Webkul\UVDesk\CoreFrameworkBundle\Controller\Privilege(($container->services['user.service'] ?? $container->getUser_ServiceService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['uvdesk.service'] ?? $container->getUvdesk_ServiceService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\Privilege', $container));

        return $instance;
    }
}
