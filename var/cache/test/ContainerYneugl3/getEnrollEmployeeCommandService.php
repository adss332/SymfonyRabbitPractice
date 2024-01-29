<?php

namespace ContainerYneugl3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEnrollEmployeeCommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Command\EnrollEmployeeCommand' shared autowired service.
     *
     * @return \App\Command\EnrollEmployeeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/EnrollEmployeeCommand.php';

        $container->privates['App\\Command\\EnrollEmployeeCommand'] = $instance = new \App\Command\EnrollEmployeeCommand(($container->privates['App\\Services\\CourseEnrollmentService'] ?? $container->load('getCourseEnrollmentServiceService')));

        $instance->setName('app:enroll-employee');
        $instance->setDescription('Add employee to course');

        return $instance;
    }
}