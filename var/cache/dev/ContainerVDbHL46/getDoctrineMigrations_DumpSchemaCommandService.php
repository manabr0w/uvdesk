<?php

namespace ContainerVDbHL46;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrineMigrations_DumpSchemaCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDumpSchemaDoctrineCommand.php';

        $container->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }
}
