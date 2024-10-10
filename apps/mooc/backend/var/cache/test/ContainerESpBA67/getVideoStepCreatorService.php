<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVideoStepCreatorService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Mooc\Steps\Application\Create\VideoStepCreator' shared autowired service.
     *
     * @return \CodelyTv\Mooc\Steps\Application\Create\VideoStepCreator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Mooc/Steps/Application/Create/VideoStepCreator.php';

        return $container->privates['CodelyTv\\Mooc\\Steps\\Application\\Create\\VideoStepCreator'] = new \CodelyTv\Mooc\Steps\Application\Create\VideoStepCreator(($container->privates['CodelyTv\\Mooc\\Steps\\Infrastructure\\Persistence\\MySqlStepRepository'] ?? $container->load('getMySqlStepRepositoryService')));
    }
}
