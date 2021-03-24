<?php

namespace ContainerNlxjTlE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Oj1FpDmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Oj1FpDm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Oj1FpDm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'compteRepository' => ['privates', 'App\\Repository\\CompteRepository', 'getCompteRepositoryService', true],
            'repository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'compteRepository' => 'App\\Repository\\CompteRepository',
            'repository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
