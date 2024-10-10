<?php

namespace ContainerYDryPxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_PhpService extends CodelyTv_Apps_Backoffice_Backend_BackofficeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'routing.loader.php' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\PhpFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        return $container->privates['routing.loader.php'] = new \Symfony\Component\Routing\Loader\PhpFileLoader(($container->privates['file_locator'] ??= new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)))), 'test');
    }
}
