<?php
include_once 'helpers/Router.php';
include 'helpers/GlobalFunctions.php';

$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->get('/prueba', function(){
  echo 'prueba';
});

$router->get('/login', 'AuthController@index');
