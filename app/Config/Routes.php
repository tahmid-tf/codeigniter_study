<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/articles', 'Articles::index');

$routes->get('/articles/(:num)', 'Articles::show/$1', ['as' => 'article_show']);
$routes->get('/articles/new', 'Articles::new',['as' => 'article_new']);
$routes->post('/articles/create', 'Articles::create');

// --------------------- edit article ---------------------

$routes->get('/articles/edit/(:num)', 'Articles::edit/$1',['as' => 'Articles/edit']);
$routes->post('/articles/update/(:num)', 'Articles::update/$1',['as' => 'Articles/update']);
