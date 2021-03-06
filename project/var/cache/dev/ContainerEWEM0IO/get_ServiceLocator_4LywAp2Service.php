<?php

namespace ContainerEWEM0IO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4LywAp2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4LywAp2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4LywAp2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\FormulaireController::create' => ['privates', '.service_locator.D9.VUxJ', 'get_ServiceLocator_D9_VUxJService', true],
            'App\\Controller\\FormulaireController::createcli' => ['privates', '.service_locator.ERpe4ok', 'get_ServiceLocator_ERpe4okService', true],
            'App\\Controller\\FormulaireController::createmat' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\FormulaireController::index' => ['privates', '.service_locator.p6.J0RO', 'get_ServiceLocator_P6_J0ROService', true],
            'App\\Controller\\FormulaireController::stats' => ['privates', '.service_locator.p6.J0RO', 'get_ServiceLocator_P6_J0ROService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\FormulaireController:create' => ['privates', '.service_locator.D9.VUxJ', 'get_ServiceLocator_D9_VUxJService', true],
            'App\\Controller\\FormulaireController:createcli' => ['privates', '.service_locator.ERpe4ok', 'get_ServiceLocator_ERpe4okService', true],
            'App\\Controller\\FormulaireController:createmat' => ['privates', '.service_locator.5miB8_X', 'get_ServiceLocator_5miB8XService', true],
            'App\\Controller\\FormulaireController:index' => ['privates', '.service_locator.p6.J0RO', 'get_ServiceLocator_P6_J0ROService', true],
            'App\\Controller\\FormulaireController:stats' => ['privates', '.service_locator.p6.J0RO', 'get_ServiceLocator_P6_J0ROService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\FormulaireController::create' => '?',
            'App\\Controller\\FormulaireController::createcli' => '?',
            'App\\Controller\\FormulaireController::createmat' => '?',
            'App\\Controller\\FormulaireController::index' => '?',
            'App\\Controller\\FormulaireController::stats' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\FormulaireController:create' => '?',
            'App\\Controller\\FormulaireController:createcli' => '?',
            'App\\Controller\\FormulaireController:createmat' => '?',
            'App\\Controller\\FormulaireController:index' => '?',
            'App\\Controller\\FormulaireController:stats' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
