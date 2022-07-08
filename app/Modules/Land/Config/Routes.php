<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}


$routes->group('land', ['namespace' => 'App\Modules\Land\Controllers'], function($subroutes){

	/*** Route for About ***/
	$subroutes->add('test', 'Home::test');

	/*** Route for Home ***/
	$subroutes->add('home', 'Home::index');

});