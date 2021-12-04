<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/car' => [[['_route' => 'car_index', '_controller' => 'App\\Controller\\CarController::carIndex'], null, null, null, false, false, null]],
        '/car/add' => [[['_route' => 'car_add', '_controller' => 'App\\Controller\\CarController::carAdd'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/job' => [[['_route' => 'job_index', '_controller' => 'App\\Controller\\JobController::jobIndex'], null, null, null, false, false, null]],
        '/job/add' => [[['_route' => 'job_add', '_controller' => 'App\\Controller\\JobController::jobAdd'], null, null, null, false, false, null]],
        '/person' => [[['_route' => 'person_index', '_controller' => 'App\\Controller\\PersonController::personIndex'], null, null, null, false, false, null]],
        '/person/add' => [[['_route' => 'person_add', '_controller' => 'App\\Controller\\PersonController::personAdd'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/car/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:194)'
                        .'|lete/([^/]++)(*:215)'
                    .')'
                    .'|edit/([^/]++)(*:237)'
                .')'
                .'|/job/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:272)'
                        .'|lete/([^/]++)(*:293)'
                    .')'
                    .'|edit/([^/]++)(*:315)'
                .')'
                .'|/person/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:353)'
                        .'|lete/([^/]++)(*:374)'
                    .')'
                    .'|edit/([^/]++)(*:396)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        194 => [[['_route' => 'car_detail', '_controller' => 'App\\Controller\\CarController::carDetail'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'car_delete', '_controller' => 'App\\Controller\\CarController::carDelete'], ['id'], null, null, false, true, null]],
        237 => [[['_route' => 'car_edit', '_controller' => 'App\\Controller\\CarController::carEdit'], ['id'], null, null, false, true, null]],
        272 => [[['_route' => 'job_detail', '_controller' => 'App\\Controller\\JobController::jobDetail'], ['id'], null, null, false, true, null]],
        293 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\JobController::jobDelete'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'job_edit', '_controller' => 'App\\Controller\\JobController::jobEdit'], ['id'], null, null, false, true, null]],
        353 => [[['_route' => 'person_detail', '_controller' => 'App\\Controller\\PersonController::personDetail'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'person_delete', '_controller' => 'App\\Controller\\PersonController::personDelete'], ['id'], null, null, false, true, null]],
        396 => [
            [['_route' => 'person_edit', '_controller' => 'App\\Controller\\PersonController::personEdit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
