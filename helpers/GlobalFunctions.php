<?php
function path($filename){
  return dirname(__FILE__).'/../'.$filename;
}
function view($view){
  return path('views/'.$view.'.php');
}
function url($path){
  if ( (!empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') ||
     (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ||
     (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') ) {
    $scheme = 'https';
  } else {
      $scheme = 'http';
  }
  $host = $scheme."://".$_SERVER['HTTP_HOST'];
  $projectdir = str_replace('index.php','',$_SERVER['SCRIPT_NAME']);
  return $host.$projectdir.ltrim($path, '/');
}