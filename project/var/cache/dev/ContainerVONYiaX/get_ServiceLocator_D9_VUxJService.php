<?php

namespace ContainerVONYiaX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D9_VUxJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D9.VUxJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D9.VUxJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'repoCli' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'repoMat' => ['privates', 'App\\Repository\\MaterielRepository', 'getMaterielRepositoryService', true],
        ], [
            'em' => '?',
            'repoCli' => 'App\\Repository\\ClientRepository',
            'repoMat' => 'App\\Repository\\MaterielRepository',
        ]);
    }
}
