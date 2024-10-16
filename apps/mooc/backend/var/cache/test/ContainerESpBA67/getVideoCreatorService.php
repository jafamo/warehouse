<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVideoCreatorService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Mooc\Videos\Application\Create\VideoCreator' shared autowired service.
     *
     * @return \CodelyTv\Mooc\Videos\Application\Create\VideoCreator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Mooc/Videos/Application/Create/VideoCreator.php';

        return $container->privates['CodelyTv\\Mooc\\Videos\\Application\\Create\\VideoCreator'] = new \CodelyTv\Mooc\Videos\Application\Create\VideoCreator(($container->privates['CodelyTv\\Mooc\\Videos\\Infrastructure\\Persistence\\VideoRepositoryMySql'] ?? $container->load('getVideoRepositoryMySqlService')), ($container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\WithMonitoring\\WithPrometheusMonitoringEventBus'] ?? $container->load('getWithPrometheusMonitoringEventBusService')));
    }
}
