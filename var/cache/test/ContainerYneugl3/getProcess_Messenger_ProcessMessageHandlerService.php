<?php

namespace ContainerYneugl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcess_Messenger_ProcessMessageHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'process.messenger.process_message_handler' shared service.
     *
     * @return \Symfony\Component\Process\Messenger\RunProcessMessageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/process/Messenger/RunProcessMessageHandler.php';

        return $container->privates['process.messenger.process_message_handler'] = new \Symfony\Component\Process\Messenger\RunProcessMessageHandler();
    }
}
