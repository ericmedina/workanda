<?php
function path($filename){
  return dirname(__FILE__).'/../'.$filename;
}
function view($view, $with = []){
  foreach($with as $key => $value){
    ${$key} = $value;
  }
  require_once path('views/layout/template.php');
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
function redirect($url){
  header('location: '.url($url));
}

function user(){
  if(isset($_SESSION['Usuario'])){
    return unserialize($_SESSION['Usuario']);
  }
  return null;
}