<?php

namespace Admin\Config;

use CodeIgniter\Router\RouteCollection;
use Admin\Controllers\Users;

/**
 * @var RouteCollection $routes
 */

$routes->get('/admin/users', [Users::class , 'index']);