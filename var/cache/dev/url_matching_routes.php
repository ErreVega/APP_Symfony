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
        '/test2' => [[['_route' => 'test', '_controller' => 'App\\Controller\\APP_controller::test2'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\APP_controller::main'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'logout', '_controller' => 'App\\Controller\\APP_controller::logout'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\GeneratedSecurityController::logout'], null, null, null, false, false, null],
        ],
        '/mostrar_equipo' => [[['_route' => 'app_ejemplobasedatos_mostrar_equipo', '_controller' => 'App\\Controller\\EjemploBaseDatos::mostrar_equipo'], null, null, null, false, false, null]],
        '/correo' => [[['_route' => 'app_ejemplobasedatos_prueba_correo', '_controller' => 'App\\Controller\\EjemploBaseDatos::prueba_correo'], null, null, null, false, false, null]],
        '/correoForm' => [[['_route' => 'app_ejemplobasedatos_correoform', '_controller' => 'App\\Controller\\EjemploBaseDatos::correoForm'], null, null, null, false, false, null]],
        '/formuHola' => [[['_route' => 'formuHola', '_controller' => 'App\\Controller\\EjemploFormularios::formuHola'], null, null, null, false, false, null]],
        '/tabla' => [[['_route' => 'tabla', '_controller' => 'App\\Controller\\EjemploPlantillas::tabla'], null, null, null, true, false, null]],
        '/plantillabase' => [[['_route' => 'plantillabase', '_controller' => 'App\\Controller\\EjemploPlantillas::plantillabase'], null, null, null, false, false, null]],
        '/plantillacats' => [[['_route' => 'plantillacats', '_controller' => 'App\\Controller\\EjemploPlantillas::plantillacats'], null, null, null, false, false, null]],
        '/base/hola' => [[['_route' => 'app_ejemplorutabase_hola', '_controller' => 'App\\Controller\\EjemploRutaBase::hola'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\GeneratedSecurityController::login'], null, null, null, false, false, null]],
        '/received' => [[['_route' => 'received', '_controller' => 'App\\Controller\\LogedControllers::received'], null, null, null, false, false, null]],
        '/sended' => [[['_route' => 'sended', '_controller' => 'App\\Controller\\LogedControllers::sended'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/saludo/([^/]++)(*:185)'
                .'|/p(?'
                    .'|ositivo/([^/]++)(*:214)'
                    .'|rofile/([^/]++)(*:237)'
                .')'
                .'|/mensaje/([^/]++)(*:263)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'saludo', '_controller' => 'App\\Controller\\EjemploPlantillas::saludo'], ['nombre'], null, null, false, true, null]],
        214 => [[['_route' => 'positivo', '_controller' => 'App\\Controller\\EjemploPlantillas::positivo'], ['num'], null, null, false, true, null]],
        237 => [[['_route' => 'profile', '_controller' => 'App\\Controller\\LogedControllers::profile'], ['num'], null, null, false, true, null]],
        263 => [
            [['_route' => 'mensaje', '_controller' => 'App\\Controller\\LogedControllers::getMessage'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
