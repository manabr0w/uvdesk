<?php

namespace ContainerVDbHL46;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarketingModuleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\SupportCenterBundle\Controller\MarketingModule' shared autowired service.
     *
     * @return \Webkul\UVDesk\SupportCenterBundle\Controller\MarketingModule
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/support-center-bundle/Controller/MarketingModule.php';

        $container->services['Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule'] = $instance = new \Webkul\UVDesk\SupportCenterBundle\Controller\MarketingModule(($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['user.service'] ?? $container->getUser_ServiceService()), $container, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Webkul\\UVDesk\\CoreFrameworkBundle\\Services\\FileUploadService'] ?? $container->getFileUploadServiceService()), ($container->services['uvdesk.service'] ?? $container->getUvdesk_ServiceService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('Webkul\\UVDesk\\SupportCenterBundle\\Controller\\MarketingModule', $container));

        return $instance;
    }
}
