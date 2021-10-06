<?php
include_once 'Route.php';
include_once 'Request.php';

class Router{
  //Array de rutas del sistema
  private $routes = [];

  //Declarar ruta get
  public function get($url, $action){
    $route = new Route($url, 'GET', $action);
    $this->add($route);
  }

  //Declarar ruta post
  public function post($url, $action){
    $route = new Route($url, 'POST', $action);
    $this->add($route);
  }

  private function add($route){
    array_push($this->routes, $route);
  }

  private function notfound(){
    return view('404');
  }

  private function run(){
    
    $request = new Request;
    // if(strpos($request->url, 'static') == 1){
    //   return include_once path(ltrim($request->url,"/"));
    // }
    //Rutas que coincida su url
    $matching_routes = [];
    foreach($this->routes as $route){
      if($route->url == $request->url){
        array_push($matching_routes, $route);
      }
    }
    //Ejecutar la que coincida con el verbo http
    $matching_route = null;
    foreach($matching_routes as $route){
      if($route->method == $request->method){
        $matching_route = $route;
        break;
      }
    }
    if($matching_route){
      $matching_route->run();
    }else{
      $this->notfound();
    }
  }

  function __destruct()
  {
    $this->run();
  }
}