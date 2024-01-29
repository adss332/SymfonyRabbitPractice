<?php

namespace ContainerYneugl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LhPnpg6Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.LhPnpg6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LhPnpg6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'courses_transport' => ['privates', 'messenger.transport.courses_transport', 'getMessenger_Transport_CoursesTransportService', true],
            'messenger.transport.courses_transport' => ['privates', 'messenger.transport.courses_transport', 'getMessenger_Transport_CoursesTransportService', true],
        ], [
            'courses_transport' => '?',
            'messenger.transport.courses_transport' => '?',
        ]);
    }
}
