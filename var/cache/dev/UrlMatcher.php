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
        '/admin/categories' => [[['_route' => 'admin_categories', '_controller' => 'App\\Controller\\AdminCategoriesController::index'], null, null, null, false, false, null]],
        '/admin/categories/creation' => [[['_route' => 'creation_categories', '_controller' => 'App\\Controller\\AdminCategoriesController::modification'], null, null, null, false, false, null]],
        '/admin/produits' => [[['_route' => 'admin_produits', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/produits/creation' => [[['_route' => 'creation_produits', '_controller' => 'App\\Controller\\AdminController::modification'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'espace_admin', '_controller' => 'App\\Controller\\AdminController::espaceAdmin'], null, null, null, false, false, null]],
        '/client/espace' => [[['_route' => 'espace_client', '_controller' => 'App\\Controller\\AdminController::espaceClient'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\AdminSecuController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\AdminSecuController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\AdminSecuController::deconnexion'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\CategoriesController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/client/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/client/panier/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\PanierController::commande'], null, null, null, false, false, null]],
        '/admin/espace/commandes' => [[['_route' => 'commandes_client', '_controller' => 'App\\Controller\\PanierController::adminCommandesClient'], null, null, null, false, false, null]],
        '/client/produits' => [[['_route' => 'produits', '_controller' => 'App\\Controller\\ProduitsController::index'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|categories/([^/]++)(?'
                        .'|(*:201)'
                    .')'
                    .'|produit(?'
                        .'|/([^/]++)(*:229)'
                        .'|s/([^/]++)(?'
                            .'|(*:250)'
                        .')'
                    .')'
                    .'|utilisateurs/([^/]++)(*:281)'
                .')'
                .'|/client/(?'
                    .'|espace/(?'
                        .'|modification/([^/]++)(*:332)'
                        .'|suppression/([^/]++)(*:360)'
                        .'|commande/([^/]++)(*:385)'
                        .'|affichage/commande/([^/]++)(*:420)'
                    .')'
                    .'|p(?'
                        .'|anier/(?'
                            .'|add/([^/]++)(*:454)'
                            .'|remove/([^/]++)(*:477)'
                        .')'
                        .'|roduit/([^/]++)(*:501)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [
            [['_route' => 'modif_categories', '_controller' => 'App\\Controller\\AdminCategoriesController::modification'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'supp_categories', '_controller' => 'App\\Controller\\AdminCategoriesController::suppression'], ['id'], ['SUP' => 0], null, false, true, null],
        ],
        229 => [[['_route' => 'admin_produit', '_controller' => 'App\\Controller\\AdminController::produit'], ['id'], null, null, false, true, null]],
        250 => [
            [['_route' => 'modif_produits', '_controller' => 'App\\Controller\\AdminController::modification'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'supp_produits', '_controller' => 'App\\Controller\\AdminController::suppression'], ['id'], ['SUP' => 0], null, false, true, null],
        ],
        281 => [[['_route' => 'supp_utilisateur', '_controller' => 'App\\Controller\\AdminController::suppressionUtilisateur'], ['id'], ['SUP' => 0], null, false, true, null]],
        332 => [[['_route' => 'modif_client', '_controller' => 'App\\Controller\\AdminController::modificationClient'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        360 => [[['_route' => 'supp_client', '_controller' => 'App\\Controller\\AdminController::suppressionClient'], ['id'], ['SUP' => 0], null, false, true, null]],
        385 => [[['_route' => 'commande_client', '_controller' => 'App\\Controller\\PanierController::commandeClient'], ['user'], null, null, false, true, null]],
        420 => [[['_route' => 'affichage_commande', '_controller' => 'App\\Controller\\PanierController::affichageCommande'], ['order'], null, null, false, true, null]],
        454 => [[['_route' => 'add_products', '_controller' => 'App\\Controller\\PanierController::add'], ['id'], null, null, false, true, null]],
        477 => [[['_route' => 'remove_products', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        501 => [
            [['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitsController::produit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
