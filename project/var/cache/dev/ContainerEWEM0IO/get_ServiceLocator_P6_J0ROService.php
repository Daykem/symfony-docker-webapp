<?php

namespace ContainerEWEM0IO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_P6_J0ROService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.p6.J0RO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.p6.J0RO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repoCli' => ['privates', 'App\\Repository\\ClientRepository', 'getClientRepositoryService', true],
            'repoLie' => ['privates', 'App\\Repository\\LienRepository', 'getLienRepositoryService', true],
            'repoMat' => ['privates', 'App\\Repository\\MaterielRepository', 'getMaterielRepositoryService', true],
        ], [
            'repoCli' => 'App\\Repository\\ClientRepository',
            'repoLie' => 'App\\Repository\\LienRepository',
            'repoMat' => 'App\\Repository\\MaterielRepository',
        ]);
    }
}
