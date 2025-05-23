<?php

namespace ContainerVDbHL46;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReport_ServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'report.service' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Services\ReportService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Services/ReportService.php';

        return $container->services['report.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\Services\ReportService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $container);
    }
}
