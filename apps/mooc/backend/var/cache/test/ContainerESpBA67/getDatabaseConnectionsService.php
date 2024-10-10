<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDatabaseConnectionsService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Shared\Infrastructure\Doctrine\DatabaseConnections' shared autowired service.
     *
     * @return \CodelyTv\Shared\Infrastructure\Doctrine\DatabaseConnections
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Shared/Infrastructure/Doctrine/DatabaseConnections.php';

        return $container->privates['CodelyTv\\Shared\\Infrastructure\\Doctrine\\DatabaseConnections'] = new \CodelyTv\Shared\Infrastructure\Doctrine\DatabaseConnections(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->services['Doctrine\\ORM\\EntityManager'] ?? $container->load('getEntityManagerService'));
        }, 1));
    }
}
