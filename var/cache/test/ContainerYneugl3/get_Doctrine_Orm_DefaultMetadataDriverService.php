<?php

namespace ContainerYneugl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Doctrine_Orm_DefaultMetadataDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.doctrine.orm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/CompatibilityAnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/ColocatedMappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/ReflectionBasedDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AttributeDriver.php';

        $a = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $a->addDriver(($container->privates['doctrine.orm.default_attribute_metadata_driver'] ??= new \Doctrine\ORM\Mapping\Driver\AttributeDriver([(\dirname(__DIR__, 4).'/src/Entity')], true)), 'App\\Entity');

        return $container->privates['.doctrine.orm.default_metadata_driver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($a, ($container->privates['.service_locator.KLVvNIq'] ?? $container->load('get_ServiceLocator_KLVvNIqService')));
    }
}
