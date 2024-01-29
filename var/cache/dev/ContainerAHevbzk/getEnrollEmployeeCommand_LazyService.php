<?php

namespace ContainerAHevbzk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEnrollEmployeeCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\EnrollEmployeeCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\EnrollEmployeeCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:enroll-employee', [], 'Add employee to course', false, #[\Closure(name: 'App\\Command\\EnrollEmployeeCommand')] fn (): \App\Command\EnrollEmployeeCommand => ($container->privates['App\\Command\\EnrollEmployeeCommand'] ?? $container->load('getEnrollEmployeeCommandService')));
    }
}
