<?php

namespace ContainerYDryPxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiExceptionListenerService extends CodelyTv_Apps_Backoffice_Backend_BackofficeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Shared\Infrastructure\Symfony\ApiExceptionListener' shared autowired service.
     *
     * @return \CodelyTv\Shared\Infrastructure\Symfony\ApiExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Shared/Infrastructure/Symfony/ApiExceptionListener.php';
        include_once \dirname(__DIR__, 7).'/src/Shared/Infrastructure/Symfony/ApiExceptionsHttpStatusCodeMapping.php';

        return $container->privates['CodelyTv\\Shared\\Infrastructure\\Symfony\\ApiExceptionListener'] = new \CodelyTv\Shared\Infrastructure\Symfony\ApiExceptionListener(($container->privates['CodelyTv\\Shared\\Infrastructure\\Symfony\\ApiExceptionsHttpStatusCodeMapping'] ??= new \CodelyTv\Shared\Infrastructure\Symfony\ApiExceptionsHttpStatusCodeMapping()));
    }
}
