<?php

namespace ContainerEWEM0IO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormulaireControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FormulaireController' shared autowired service.
     *
     * @return \App\Controller\FormulaireController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FormulaireController.php';

        $container->services['App\\Controller\\FormulaireController'] = $instance = new \App\Controller\FormulaireController();

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'session' => ['privates', '.session.deprecated', 'get_Session_DeprecatedService', true],
            'twig' => ['services', '.container.private.twig', 'get_Container_Private_TwigService', false],
        ], [
            'doctrine' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'session' => '.session.deprecated',
            'twig' => '?',
        ]))->withContext('App\\Controller\\FormulaireController', $container));

        return $instance;
    }
}
