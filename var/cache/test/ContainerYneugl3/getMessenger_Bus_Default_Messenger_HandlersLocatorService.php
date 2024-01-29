<?php

namespace ContainerYneugl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Bus_Default_Messenger_HandlersLocatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.bus.default.messenger.handlers_locator' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlersLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlersLocator.php';

        return $container->privates['messenger.bus.default.messenger.handlers_locator'] = new \Symfony\Component\Messenger\Handler\HandlersLocator(['App\\Message\\CourseEnrollmentMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.D_HMWs4'] ?? $container->load('get_Messenger_HandlerDescriptor_DHMWs4Service'));
            yield 1 => ($container->privates['.messenger.handler_descriptor.0St0Kwq'] ?? $container->load('get_Messenger_HandlerDescriptor_0St0KwqService'));
        }, 2), 'Symfony\\Component\\Process\\Messenger\\RunProcessMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.QXXNQ9d'] ?? $container->load('get_Messenger_HandlerDescriptor_QXXNQ9dService'));
        }, 1), 'Symfony\\Component\\Console\\Messenger\\RunCommandMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.kEzMhfs'] ?? $container->load('get_Messenger_HandlerDescriptor_KEzMhfsService'));
        }, 1), 'Symfony\\Component\\Messenger\\Message\\RedispatchMessage' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['.messenger.handler_descriptor.p4Qvabm'] ?? $container->load('get_Messenger_HandlerDescriptor_P4QvabmService'));
        }, 1)]);
    }
}
