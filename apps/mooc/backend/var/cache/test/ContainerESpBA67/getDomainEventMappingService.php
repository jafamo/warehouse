<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDomainEventMappingService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Shared\Infrastructure\Bus\Event\DomainEventMapping' shared autowired service.
     *
     * @return \CodelyTv\Shared\Infrastructure\Bus\Event\DomainEventMapping
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Shared/Infrastructure/Bus/Event/DomainEventMapping.php';

        return $container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\DomainEventMapping'] = new \CodelyTv\Shared\Infrastructure\Bus\Event\DomainEventMapping(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['CodelyTv\\Mooc\\CoursesCounter\\Application\\Increment\\IncrementCoursesCounterOnCourseCreated'] ?? $container->load('getIncrementCoursesCounterOnCourseCreatedService'));
        }, 1));
    }
}
