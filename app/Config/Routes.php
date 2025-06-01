<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('contacto', 'Home::mostrarContacto');
$routes->get('registrarse', 'Home::mostrarFormRegistrarse');
$routes->get('quienes_somos', 'Home::mostrarQuienesSomos');
$routes->get('catalogo_producto', 'Home::mostrarCatalogo');
$routes->get('carrito', 'Home::mostrarCarrito');
$routes->get('terminosyUsos', 'Home::mostrarTerminosYUsos');
$routes->get('producto_detallado', 'Home::mostrarDetallesProducto');
$routes->get('login', 'Home::mostrarLogin');
$routes->get('opciones_pago', 'Home::mostrarOpcionesPago');
$routes->get('comercializacion', 'Home::mostrarComercializacion');
