<?php
  $db = require_once 'config/database.php';

  $connection = mysqli_connect($db['HOST'], $db['USERNAME'], $db['PASSWORD'], $db['DATABASE'], $db['PORT']);

  if(!$connection){
    echo 'No se ha podido conectar a la base de datos'.PHP_EOL;
    die();
  }
  echo 'Se ha conectado correctamente'.PHP_EOL;
  return $connection;