<?php

namespace ContainerIh461Mf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailSettingsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Webkul\UVDesk\CoreFrameworkBundle\Controller\EmailSettings' shared autowired service.
     *
     * @return \Webkul\UVDesk\CoreFrameworkBundle\Controller\EmailSettings
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/uvdesk/core-framework/Controller/EmailSettings.php';

        $container->services['Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettings'] = $instance = new \Webkul\UVDesk\CoreFrameworkBundle\Controller\EmailSettings(($container->services['user.service'] ?? $container->getUser_ServiceService()), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['swiftmailer.service'] ?? ($container->services['swiftmailer.service'] = new \Webkul\UVDesk\CoreFrameworkBundle\SwiftMailer\SwiftMailer($container))), ($container->privates['Webkul\\UVDesk\\MailboxBundle\\Services\\MailboxService'] ?? $container->getMailboxServiceService()));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('Webkul\\UVDesk\\CoreFrameworkBundle\\Controller\\EmailSettings', $container));

        return $instance;
    }
}
