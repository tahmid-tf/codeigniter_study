<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');


// --------------------------- filter routes with authentication

//$routes->get('/articles', 'Articles::index', ['as' => 'article_index']);
//$routes->get('/articles/(:num)', 'Articles::show/$1', ['as' => 'article_show']);
//$routes->get('/articles/new', 'Articles::new', ['as' => 'article_new']);
//$routes->post('/articles', 'Articles::create');
//$routes->get('/articles/(:num)/edit', 'Articles::edit/$1', ['as' => 'Articles/edit']);
//$routes->patch('/articles/(:num)/update/', 'Articles::update/$1', ['as' => 'Articles/update']);
//$routes->delete('/articles/(:num)', 'Articles::delete/$1', ['as' => 'article_delete_data']);


$routes->group('', ['filter' => 'session'], static function ($routes) {
    $routes->get('/articles/(:num)/delete', 'Articles::confirmDelete/$1', ['as' => 'article_delete']);
    $routes->resource('articles', ['placeholder' => '(:num)']);

    $routes->get('set-password', 'Password::set');
    $routes->post('set-password', 'Password::update');

});

// Load Shield's built-in routes
service('auth')->routes($routes);
