<?php

namespace ContainerYDryPxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAuthenticatorService extends CodelyTv_Apps_Backoffice_Backend_BackofficeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Backoffice\Auth\Application\Authenticate\UserAuthenticator' shared autowired service.
     *
     * @return \CodelyTv\Backoffice\Auth\Application\Authenticate\UserAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Backoffice/Auth/Application/Authenticate/UserAuthenticator.php';
        include_once \dirname(__DIR__, 7).'/src/Backoffice/Auth/Domain/AuthRepository.php';
        include_once \dirname(__DIR__, 7).'/src/Backoffice/Auth/Infrastructure/Persistence/InMemoryAuthRepository.php';

        return $container->privates['CodelyTv\\Backoffice\\Auth\\Application\\Authenticate\\UserAuthenticator'] = new \CodelyTv\Backoffice\Auth\Application\Authenticate\UserAuthenticator(($container->privates['CodelyTv\\Backoffice\\Auth\\Infrastructure\\Persistence\\InMemoryAuthRepository'] ??= new \CodelyTv\Backoffice\Auth\Infrastructure\Persistence\InMemoryAuthRepository()));
    }
}
