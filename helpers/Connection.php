<?php
  $db = require_once path('/config/database.php');

  $conn = mysqli_connect($db['HOST'], $db['USERNAME'], $db['PASSWORD'], $db['DATABASE'], $db['PORT']);

  if(!$conn){
    echo 'No se ha podido conectar a la base de datos'.PHP_EOL;
    die();
  }
  return $conn;