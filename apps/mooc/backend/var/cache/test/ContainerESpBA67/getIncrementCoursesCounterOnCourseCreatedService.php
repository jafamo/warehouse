<?php

namespace ContainerESpBA67;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIncrementCoursesCounterOnCourseCreatedService extends CodelyTv_Apps_Mooc_Backend_MoocBackendKernelTestDebugContainer
{
    /**
     * Gets the private 'CodelyTv\Mooc\CoursesCounter\Application\Increment\IncrementCoursesCounterOnCourseCreated' shared autowired service.
     *
     * @return \CodelyTv\Mooc\CoursesCounter\Application\Increment\IncrementCoursesCounterOnCourseCreated
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 7).'/src/Shared/Domain/Bus/Event/DomainEventSubscriber.php';
        include_once \dirname(__DIR__, 7).'/src/Mooc/CoursesCounter/Application/Increment/IncrementCoursesCounterOnCourseCreated.php';

        return $container->privates['CodelyTv\\Mooc\\CoursesCounter\\Application\\Increment\\IncrementCoursesCounterOnCourseCreated'] = new \CodelyTv\Mooc\CoursesCounter\Application\Increment\IncrementCoursesCounterOnCourseCreated(($container->privates['CodelyTv\\Mooc\\CoursesCounter\\Application\\Increment\\CoursesCounterIncrementer'] ?? $container->load('getCoursesCounterIncrementerService')));
    }
}
