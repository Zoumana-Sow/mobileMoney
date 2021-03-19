<?php

namespace ContainerLCshxxI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D6tjQl2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D6tjQl2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D6tjQl2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'resp' => ['privates', 'App\\Repository\\TransactionRepository', 'getTransactionRepositoryService', true],
        ], [
            'resp' => 'App\\Repository\\TransactionRepository',
        ]);
    }
}