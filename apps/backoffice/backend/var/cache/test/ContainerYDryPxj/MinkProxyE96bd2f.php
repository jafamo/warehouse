<?php

namespace ContainerYDryPxj;
include_once \dirname(__DIR__, 7).'/vendor/behat/mink/src/Mink.php';

class MinkProxyE96bd2f extends \Behat\Mink\Mink implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'defaultSessionName' => [parent::class, 'defaultSessionName', null],
        "\0".parent::class."\0".'sessions' => [parent::class, 'sessions', null],
        'defaultSessionName' => [parent::class, 'defaultSessionName', null],
        'sessions' => [parent::class, 'sessions', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('MinkProxyE96bd2f', false)) {
    \class_alias(__NAMESPACE__.'\\MinkProxyE96bd2f', 'MinkProxyE96bd2f', false);
}
