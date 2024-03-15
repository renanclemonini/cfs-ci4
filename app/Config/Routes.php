<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\Spad\SpadController;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/', [Home::class, 'index'], ['as' => 'home_index']);

// $routes->group('', static function ($routes) {
//     $routes->get('/', [Home::class, 'index'], ['as' => 'home.index']);
// });

$routes->group('spad', static function ($routes) {
    $routes->get('/', [SpadController::class, 'index'], ['as' => 'spad.index']);
    $routes->get('translate', [SpadController::class, 'show'], ['as' => 'spad.show']);
});

