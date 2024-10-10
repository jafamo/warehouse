<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInMemorySymfonyQueryBusService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Shared\Infrastructure\Bus\Query\InMemorySymfonyQueryBus' shared autowired service.
     *
     * @return \CodelyTv\Shared\Infrastructure\Bus\Query\InMemorySymfonyQueryBus
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Shared/Domain/Bus/Query/QueryBus.php';
        include_once \dirname(__DIR__, 7).'/src/Shared/Infrastructure/Bus/Query/InMemorySymfonyQueryBus.php';

        return $container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Query\\InMemorySymfonyQueryBus'] = new \CodelyTv\Shared\Infrastructure\Bus\Query\InMemorySymfonyQueryBus(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['CodelyTv\\Mooc\\CoursesCounter\\Application\\Find\\FindCoursesCounterQueryHandler'] ?? $container->load('getFindCoursesCounterQueryHandlerService'));
            yield 1 => ($container->privates['CodelyTv\\Mooc\\Videos\\Application\\Find\\FindVideoQueryHandler'] ?? $container->load('getFindVideoQueryHandlerService'));
        }, 2));
    }
}
