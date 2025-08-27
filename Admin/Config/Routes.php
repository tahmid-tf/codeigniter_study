<?php

namespace Admin\Config;

use CodeIgniter\Router\RouteCollection;
use Admin\Controllers\Users;

/**
 * @var RouteCollection $routes
 */

$routes->get('/admin/users', [Users::class, 'index']);
$routes->get('/admin/users/(:num)/show', [Users::class, 'show'], ['as' => 'user_show']);

// ------------------ Ban user

$routes->post('/admin/users/(:num)/ban', [Users::class, 'ban'], ['as' => 'user_ban']);