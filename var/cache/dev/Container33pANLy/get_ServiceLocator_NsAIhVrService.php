<?php

namespace Container33pANLy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NsAIhVrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NsAIhVr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NsAIhVr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', 'App\\Repository\\TransactionRepository', 'getTransactionRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
        ], [
            'em' => '?',
            'repo' => 'App\\Repository\\TransactionRepository',
            'serializer' => '?',
        ]);
    }
}
