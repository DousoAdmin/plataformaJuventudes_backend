<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('hola_mundo', 'Home::hola_mundo');

$routes->get('zamir/mision_vision', 'Home::misionVision');

$routes->get('zamir/presentacion', 'Home::presentacion');

$routes->get('zamir/trayectoria', 'Home::trayectoria');

$routes->get('zamir/imagenes', 'Home::imagenes');

