<?php

namespace ContainerYneugl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_SendersLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.senders_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Sender\SendersLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SendersLocator.php';

        $a = ($container->privates['.service_locator.LhPnpg6'] ?? $container->load('get_ServiceLocator_LhPnpg6Service'));

        if (isset($container->privates['messenger.senders_locator'])) {
            return $container->privates['messenger.senders_locator'];
        }

        return $container->privates['messenger.senders_locator'] = new \Symfony\Component\Messenger\Transport\Sender\SendersLocator(['App\\Message\\CourseEnrollmentMessage' => ['courses_transport']], $a);
    }
}
