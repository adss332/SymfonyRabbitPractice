<?php

namespace ContainerYneugl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebDevCourseEnrollmentHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\MessageHandler\WebDevCourseEnrollmentHandler' shared autowired service.
     *
     * @return \App\MessageHandler\WebDevCourseEnrollmentHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/MessageHandler/WebDevCourseEnrollmentHandler.php';

        return $container->privates['App\\MessageHandler\\WebDevCourseEnrollmentHandler'] = new \App\MessageHandler\WebDevCourseEnrollmentHandler(($container->privates['logger'] ?? self::getLoggerService($container)));
    }
}
