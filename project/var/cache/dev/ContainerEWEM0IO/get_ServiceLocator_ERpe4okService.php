<?php

namespace ContainerEWEM0IO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ERpe4okService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ERpe4ok' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ERpe4ok'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'repoCli' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
        ], [
            'em' => '?',
            'repoCli' => 'App\\Repository\\ClientRepository',
        ]);
    }
}
