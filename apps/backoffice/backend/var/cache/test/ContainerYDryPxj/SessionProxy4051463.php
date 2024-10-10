<?php

namespace ContainerYDryPxj;
include_once \dirname(__DIR__, 7).'/vendor/behat/mink/src/Session.php';

class SessionProxy4051463 extends \Behat\Mink\Session implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'driver' => [parent::class, 'driver', null],
        "\0".parent::class."\0".'elementFinder' => [parent::class, 'elementFinder', null],
        "\0".parent::class."\0".'page' => [parent::class, 'page', null],
        "\0".parent::class."\0".'selectorsHandler' => [parent::class, 'selectorsHandler', null],
        'driver' => [parent::class, 'driver', null],
        'elementFinder' => [parent::class, 'elementFinder', null],
        'page' => [parent::class, 'page', null],
        'selectorsHandler' => [parent::class, 'selectorsHandler', null],
    ];

    public function getElementFinder(): \Behat\Mink\Element\ElementFinder
    {
        if (isset($this->lazyObjectState)) {
            return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getElementFinder(...\func_get_args());
        }

        return parent::getElementFinder(...\func_get_args());
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SessionProxy4051463', false)) {
    \class_alias(__NAMESPACE__.'\\SessionProxy4051463', 'SessionProxy4051463', false);
}
