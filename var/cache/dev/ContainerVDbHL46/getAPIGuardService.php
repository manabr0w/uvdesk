<?php

namespace ContainerVDbHL46;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAPIGuardService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Webkul\UVDesk\ApiBundle\Security\Guards\APIGuard' shared autowired service.
     *
     * @return \Webkul\UVDesk\ApiBundle\Security\Guards\APIGuard
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/api-bundle/Security/Guards/APIGuard.php';

        $a = ($container->privates['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService());

        if (isset($container->privates['Webkul\\UVDesk\\ApiBundle\\Security\\Guards\\APIGuard'])) {
            return $container->privates['Webkul\\UVDesk\\ApiBundle\\Security\\Guards\\APIGuard'];
        }

        return $container->privates['Webkul\\UVDesk\\ApiBundle\\Security\\Guards\\APIGuard'] = new \Webkul\UVDesk\ApiBundle\Security\Guards\APIGuard($a, $container, ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['.container.private.security.password_encoder'] ?? $container->load('get_Container_Private_Security_PasswordEncoderService')));
    }
}
