<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_Client_HistoryService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'test.client.history' service.
     *
     * @return \Symfony\Component\BrowserKit\History
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/browser-kit/History.php';

        $container->factories['service_container']['test.client.history'] = function ($container) {
            return new \Symfony\Component\BrowserKit\History();
        };

        return $container->factories['service_container']['test.client.history']($container);
    }
}
