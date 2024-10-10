<?php

namespace ContainerYDryPxj;
include_once \dirname(__DIR__, 7).'/src/Shared/Domain/Bus/Event/EventBus.php';
include_once \dirname(__DIR__, 7).'/src/Shared/Infrastructure/Bus/Event/InMemory/InMemorySymfonyEventBus.php';

class InMemorySymfonyEventBusGhostD920c50 extends \CodelyTv\Shared\Infrastructure\Bus\Event\InMemory\InMemorySymfonyEventBus implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'bus' => [parent::class, 'bus', parent::class],
        'bus' => [parent::class, 'bus', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('InMemorySymfonyEventBusGhostD920c50', false)) {
    \class_alias(__NAMESPACE__.'\\InMemorySymfonyEventBusGhostD920c50', 'InMemorySymfonyEventBusGhostD920c50', false);
}
