<?php
require_once './controllers/AuthController.php';

class Route{
  
  public $url, $method, $action;

  function __construct($url, $method, $action)
  {
    $this->url = $url;
    $this->method = $method;
    $this->action = $action;
  }

  public function run(){
    if(is_string($this->action)){
      $call = explode('@', $this->action);
      require_once path('controllers/'.$call[0].'.php');
      $class = new $call[0]();
      $class->{$call[1]}();
    }else{
      call_user_func($this->action);
    }
  }
}