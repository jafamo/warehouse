<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRabbitMqConnectionService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Shared\Infrastructure\Bus\Event\RabbitMq\RabbitMqConnection' shared autowired service.
     *
     * @return \CodelyTv\Shared\Infrastructure\Bus\Event\RabbitMq\RabbitMqConnection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Shared/Infrastructure/Bus/Event/RabbitMq/RabbitMqConnection.php';

        return $container->privates['CodelyTv\\Shared\\Infrastructure\\Bus\\Event\\RabbitMq\\RabbitMqConnection'] = new \CodelyTv\Shared\Infrastructure\Bus\Event\RabbitMq\RabbitMqConnection(['host' => $container->getEnv('RABBITMQ_HOST'), 'port' => $container->getEnv('RABBITMQ_PORT'), 'vhost' => $container->getEnv('RABBITMQ_MOOC_VHOST'), 'login' => $container->getEnv('RABBITMQ_LOGIN'), 'password' => $container->getEnv('RABBITMQ_PASSWORD'), 'read_timeout' => 2, 'write_timeout' => 2, 'connect_timeout' => 5]);
    }
}
