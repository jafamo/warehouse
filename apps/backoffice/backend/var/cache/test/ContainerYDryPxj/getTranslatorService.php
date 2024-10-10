<?php

namespace ContainerYDryPxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslatorService extends CodelyTv_Apps_Backoffice_Backend_BackofficeBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
        include_once \dirname(__DIR__, 7).'/vendor/symfony/translation/IdentityTranslator.php';

        return $container->privates['translator'] = new \Symfony\Component\Translation\IdentityTranslator();
    }
}
