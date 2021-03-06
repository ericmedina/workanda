<?php
session_start();
include_once 'helpers/Router.php';
include 'helpers/GlobalFunctions.php';

$router = new Router();

$router->get('/login', 'AuthController@index');
$router->post('/login', 'AuthController@login');
$router->post('/logout', 'AuthController@logout');


$router->get('/', 'UsuarioController@index');
$router->get('/ver-usuario', 'UsuarioController@show');
$router->get('/nuevo-usuario', 'UsuarioController@create');
$router->post('/nuevo-usuario', 'UsuarioController@store');
$router->get('/editar-usuario', 'UsuarioController@edit');
$router->post('/editar-usuario', 'UsuarioController@update');
$router->post('/eliminar-usuario', 'UsuarioController@delete');
$router->get('/cambiar-password', 'UsuarioController@editPassword');
$router->post('/cambiar-password', 'UsuarioController@updatePassword');

$router->get('/crear-tabla', function () {
  $conn = require_once path('/helpers/Connection.php');
  $tables = $conn->query('SHOW TABLES LIKE "usuarios"');
  if (!$tables->num_rows) {
    $sql = "CREATE TABLE `usuarios` ( `id` INT(11) NOT NULL AUTO_INCREMENT ,  `nombre` VARCHAR(255) NOT NULL ,  `apellido` VARCHAR(255) NOT NULL ,  `email` VARCHAR(255) NOT NULL ,  `password` VARCHAR(255) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;";
    if (!$conn->query($sql)) {
      return;
    }
    $sql = "INSERT INTO `usuarios` (`nombre`,  `apellido`,  `email`,  `password`) VALUES ('Admin', 'Administrador', 'admin@admin.com', '".password_hash('123456', PASSWORD_BCRYPT)."')";
    if (!$conn->query($sql)) {
      return;
    }
  }
  redirect('/');
});
