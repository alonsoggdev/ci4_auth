<?php

$routes->group('', ['namespace' => 'Alonso\CIAuth\Controllers'], function($routes){
    $routes->get('login', 'AuthController::login');
    $routes->post('login', 'AuthController::attempt');
    $routes->get('logout', 'AuthController::logout');
});
