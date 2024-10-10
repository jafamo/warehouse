<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsumeRabbitMqDomainEventsCommandService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Apps\Mooc\Backend\Command\DomainEvents\RabbitMq\ConsumeRabbitMqDomainEventsCommand' shared autowired service.
     *
     * @return \CodelyTv\Apps\Mooc\Backend\Command\DomainEvents\RabbitMq\ConsumeRabbitMqDomainEventsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/DomainEvents/RabbitMq/ConsumeRabbitMqDomainEventsCommand.php';

        $container->privates['CodelyTv\\Apps\\Mooc\\Backend\\Command\\DomainEvents\\RabbitMq\\ConsumeRabbitMqDomainEventsCommand'] = $instance = new \CodelyTv\Apps\Mooc\Backend\Command\DomainEvents\RabbitMq\ConsumeRabbitMqDomainEventsCommand(($container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\RabbitMq\\RabbitMqDomainEventsConsumer'] ?? $container->load('getRabbitMqDomainEventsConsumerService')), ($container->privates['CodelyTv\\Shared\\Infrastructure\\Doctrine\\DatabaseConnections'] ?? $container->load('getDatabaseConnectionsService')), ($container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\DomainEventSubscriberLocator'] ?? $container->load('getDomainEventSubscriberLocatorService')));

        $instance->setName('codely:domain-events:rabbitmq:consume');
        $instance->setDescription('Consume domain events from the RabbitMQ');

        return $instance;
    }
}
