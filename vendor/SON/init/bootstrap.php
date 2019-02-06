<?php

namespace SON\init; 

abstract class Bootstrap{
  
  private $routes; 

  public function __construct()
  {
    $this->initRoutes();
    $this->run($this->getUrl());
  }

  abstract protected function initRoutes();

  protected function setRoutes( array $routes)
  {
        $this->routes = $routes;
  }

  protected function getUrl()
  {
      return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }

  protected function run($url)
  {
      array_walk($this->routes, function($route) use($url){
          if($url === $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $action = $route['action'];
                $controller = new $class;
                $controller->$action();
          }
        });
  }
}

?>