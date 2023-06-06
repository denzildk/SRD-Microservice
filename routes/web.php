<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('item', new Route(constant('URL_SUBFOLDER') . '/item/{id}', array('controller' => 'ItemController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('weapon',new Route(constant('URL_SUBFOLDER') . '/weapon', array('controller' => 'WeaponController', 'method' => 'index'), array()));