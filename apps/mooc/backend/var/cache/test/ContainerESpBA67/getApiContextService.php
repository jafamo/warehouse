<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiContextService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the public 'CodelyTv\Tests\Shared\Infrastructure\Behat\ApiContext' shared autowired service.
     *
     * @return \CodelyTv\Tests\Shared\Infrastructure\Behat\ApiContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/behat/behat/src/Behat/Behat/Context/Context.php';
        include_once \dirname(__DIR__, 7).'/vendor/friends-of-behat/mink-extension/src/Behat/MinkExtension/Context/MinkAwareContext.php';
        include_once \dirname(__DIR__, 7).'/vendor/friends-of-behat/mink-extension/src/Behat/MinkExtension/Context/RawMinkContext.php';
        include_once \dirname(__DIR__, 7).'/tests/Shared/Infrastructure/Behat/ApiContext.php';

        return $container->services['CodelyTv\\Tests\\Shared\\Infrastructure\\Behat\\ApiContext'] = new \CodelyTv\Tests\Shared\Infrastructure\Behat\ApiContext(($container->services['behat.mink.default_session'] ?? $container->load('getBehat_Mink_DefaultSessionService')));
    }
}
