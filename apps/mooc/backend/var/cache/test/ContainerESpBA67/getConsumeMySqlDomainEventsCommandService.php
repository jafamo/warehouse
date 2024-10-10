<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsumeMySqlDomainEventsCommandService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Apps\Mooc\Backend\Command\DomainEvents\MySql\ConsumeMySqlDomainEventsCommand' shared autowired service.
     *
     * @return \CodelyTv\Apps\Mooc\Backend\Command\DomainEvents\MySql\ConsumeMySqlDomainEventsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/DomainEvents/MySql/ConsumeMySqlDomainEventsCommand.php';

        $container->privates['CodelyTv\\Apps\\Mooc\\Backend\\Command\\DomainEvents\\MySql\\ConsumeMySqlDomainEventsCommand'] = $instance = new \CodelyTv\Apps\Mooc\Backend\Command\DomainEvents\MySql\ConsumeMySqlDomainEventsCommand(($container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\MySql\\MySqlDoctrineDomainEventsConsumer'] ?? $container->load('getMySqlDoctrineDomainEventsConsumerService')), ($container->privates['CodelyTv\\Shared\\Infrastructure\\Doctrine\\DatabaseConnections'] ?? $container->load('getDatabaseConnectionsService')), ($container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\DomainEventSubscriberLocator'] ?? $container->load('getDomainEventSubscriberLocatorService')));

        $instance->setName('codely:domain-events:mysql:consume');
        $instance->setDescription('Consume domain events from MySql');

        return $instance;
    }
}
