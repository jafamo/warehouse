<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/courses-counter' => [[['_route' => 'courses_counter_get', '_controller' => 'CodelyTv\\Apps\\Mooc\\Backend\\Controller\\CoursesCounter\\CoursesCounterGetController'], null, ['GET' => 0], null, false, false, null]],
        '/health-check' => [[['_route' => 'health-check_get', '_controller' => 'CodelyTv\\Apps\\Mooc\\Backend\\Controller\\HealthCheck\\HealthCheckGetController'], null, ['GET' => 0], null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics_get', '_controller' => 'CodelyTv\\Apps\\Mooc\\Backend\\Controller\\Metrics\\MetricsController'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/courses/([^/]++)(*:24)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [
            [['_route' => 'courses_put', '_controller' => 'CodelyTv\\Apps\\Mooc\\Backend\\Controller\\Courses\\CoursesPutController'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
