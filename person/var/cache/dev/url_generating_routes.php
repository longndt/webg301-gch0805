<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'car_index' => [[], ['_controller' => 'App\\Controller\\CarController::carIndex'], [], [['text', '/car']], [], []],
    'car_detail' => [['id'], ['_controller' => 'App\\Controller\\CarController::carDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/car/detail']], [], []],
    'car_delete' => [['id'], ['_controller' => 'App\\Controller\\CarController::carDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/car/delete']], [], []],
    'car_add' => [[], ['_controller' => 'App\\Controller\\CarController::carAdd'], [], [['text', '/car/add']], [], []],
    'car_edit' => [['id'], ['_controller' => 'App\\Controller\\CarController::carEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/car/edit']], [], []],
    'sort_car_price_asc' => [[], ['_controller' => 'App\\Controller\\CarController::sortCarPriceAsc'], [], [['text', '/car/price/asc']], [], []],
    'sort_car_price_desc' => [[], ['_controller' => 'App\\Controller\\CarController::sortCarPriceDesc'], [], [['text', '/car/price/desc']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'job_index' => [[], ['_controller' => 'App\\Controller\\JobController::jobIndex'], [], [['text', '/job']], [], []],
    'job_detail' => [['id'], ['_controller' => 'App\\Controller\\JobController::jobDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/job/detail']], [], []],
    'job_delete' => [['id'], ['_controller' => 'App\\Controller\\JobController::jobDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/job/delete']], [], []],
    'job_add' => [[], ['_controller' => 'App\\Controller\\JobController::jobAdd'], [], [['text', '/job/add']], [], []],
    'job_edit' => [['id'], ['_controller' => 'App\\Controller\\JobController::jobEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/job/edit']], [], []],
    'person_index' => [[], ['_controller' => 'App\\Controller\\PersonController::personIndex'], [], [['text', '/person']], [], []],
    'person_detail' => [['id'], ['_controller' => 'App\\Controller\\PersonController::personDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/person/detail']], [], []],
    'person_delete' => [['id'], ['_controller' => 'App\\Controller\\PersonController::personDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/person/delete']], [], []],
    'person_add' => [[], ['_controller' => 'App\\Controller\\PersonController::personAdd'], [], [['text', '/person/add']], [], []],
    'person_edit' => [['id'], ['_controller' => 'App\\Controller\\PersonController::personEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/person/edit']], [], []],
    'sort_person_id_desc' => [[], ['_controller' => 'App\\Controller\\PersonController::sortPersonByIdDesc'], [], [['text', '/person/sort/id/desc']], [], []],
    'sort_person_name_asc' => [[], ['_controller' => 'App\\Controller\\PersonController::sortPersonNameAsc'], [], [['text', '/person/name/asc']], [], []],
    'sort_person_name_desc' => [[], ['_controller' => 'App\\Controller\\PersonController::sortPersonNameDesc'], [], [['text', '/person/name/desc']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
