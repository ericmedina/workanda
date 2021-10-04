<?php
include_once 'helpers/Router.php';
include 'helpers/GlobalFunctions.php';

$router = new Router();

$router->get('/', 'UsuarioController@index');
$router->get('/nuevo-usuario', 'UsuarioController@create');
$router->post('/nuevo-usuario', 'UsuarioController@store');

$router->get('/crear-tabla', function () {
  $conn = require_once path('/helpers/Connection.php');
  $tables = $conn->query('SHOW TABLES LIKE "usuarios"');
  if (!$tables->num_rows) {
    $sql = "CREATE TABLE `workanda`.`usuarios` ( `id` INT(11) NOT NULL AUTO_INCREMENT ,  `nombre` VARCHAR(255) NOT NULL ,  `apellido` VARCHAR(255) NOT NULL ,  `email` VARCHAR(255) NOT NULL ,  `password` VARCHAR(255) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;";
    if (!$conn->query($sql)) {
      echo "Error: " . $sql . "<br>" . $conn->error;
      return;
    }
    $sql = "INSERT INTO `usuarios` (`nombre`,  `apellido`,  `email`,  `password`) VALUES ('Admin', 'Administrador', 'admin@admin.com', '".password_hash('123456', PASSWORD_BCRYPT)."')";
    if (!$conn->query($sql)) {
      echo "Error: " . $sql . "<br>" . $conn->error;
      return;
    }
  }
});

$router->get('/login', 'AuthController@index');
