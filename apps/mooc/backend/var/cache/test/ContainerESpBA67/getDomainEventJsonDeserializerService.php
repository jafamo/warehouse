<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDomainEventJsonDeserializerService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Shared\Infrastructure\Bus\Event\DomainEventJsonDeserializer' shared autowired service.
     *
     * @return \CodelyTv\Shared\Infrastructure\Bus\Event\DomainEventJsonDeserializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Shared/Infrastructure/Bus/Event/DomainEventJsonDeserializer.php';

        return $container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\DomainEventJsonDeserializer'] = new \CodelyTv\Shared\Infrastructure\Bus\Event\DomainEventJsonDeserializer(($container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\DomainEventMapping'] ?? $container->load('getDomainEventMappingService')));
    }
}
