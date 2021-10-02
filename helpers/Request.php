<?php

class Request{
  public $url, $method;

  function __construct(){
    $projectname = str_replace('/index.php','',$_SERVER['SCRIPT_NAME']);
    $this->url = str_replace($projectname,'',parse_url($_SERVER['REQUEST_URI'])['path']);
    $this->method = $_SERVER['REQUEST_METHOD'];
    foreach($_REQUEST as $key => $value){
      $this->{$key} = $value;
    }
  }
}