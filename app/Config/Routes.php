<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/welcome', 'Home::welcome');

$routes->get('/themetype', 'JenisThemeController::index');
$routes->get('/themetype/add', 'JenisThemeController::add');
$routes->post('/themetype/save_add', 'JenisThemeController::saveAdd');
$routes->get('/themetype/edit/(:any)', 'JenisThemeController::edit/$1');
$routes->post('/themetype/save_edit', 'JenisThemeController::saveEdit');
$routes->get('/themetype/delete/(:any)', 'JenisThemeController::saveDelete/$1');

$routes->get('/themeclass', 'ThemeClassController::index');
$routes->get('/themeclass/add', 'ThemeClassController::add');
$routes->post('/themeclass/save_add', 'ThemeClassController::saveAdd');
$routes->get('/themeclass/edit/(:any)', 'ThemeClassController::edit/$1');
$routes->post('/themeclass/save_edit', 'ThemeClassController::saveEdit');
$routes->get('/themeclass/delete/(:any)', 'ThemeClassController::saveDelete/$1');

$routes->get('/theme', 'ThemeController::index');
$routes->get('/theme/add', 'ThemeController::add');
$routes->post('/theme/save_add', 'ThemeController::saveAdd');
$routes->get('/theme/edit/(:any)', 'ThemeController::edit/$1');
$routes->post('/theme/save_edit', 'ThemeController::saveEdit');
$routes->get('/theme/delete/(:any)', 'ThemeController::saveDelete/$1');