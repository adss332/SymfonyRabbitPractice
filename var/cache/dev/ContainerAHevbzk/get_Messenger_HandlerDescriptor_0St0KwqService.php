<?php

namespace ContainerAHevbzk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_0St0KwqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.0St0Kwq' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/MessageHandler/WebDevCourseEnrollmentHandler.php';

        return $container->privates['.messenger.handler_descriptor.0St0Kwq'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\MessageHandler\WebDevCourseEnrollmentHandler(($container->privates['logger'] ?? self::getLoggerService($container))), []);
    }
}
