<?php

namespace application\core;

class Router
{
  protected $url;
  protected $params = [];

  function __construct() {
    $this->url = explode('/', trim($_SERVER["REQUEST_URI"], '/'));
    if (!$this->url[1] or is_Numeric($this->url[1])) {
      if ($this->url[0] == "") {
        $this->url = [
          0 => 'main',
          1 => 'index'
        ];
      } else {
        $this->url = [
          0 => 'main',
          1 => $this->url[0],
          2 => $this->url[1],
        ];
      }
    }
    $this->params = [
      'controller' => $this->url[0],
      'action' => $this->url[1],
      'id' => $this->url[2],
    ];
  }

  public function issetController($p1)
  {
    if (class_exists($p1))
      return true;
    return false;
  }

  public function issetMethod($p1, $p2)
  {
    if (method_exists($p1, $p2))
      return true;
    return false;
  }

  public function run()
  {
    $path = 'application\controllers\\'.ucfirst($this->url[0]).'Controller';
    if ($this->issetController($path)) {
      $action = $this->url[1].'Action';
      if ($this->issetMethod($path, $action)) {
        $controller = new $path($this->params);
        $controller->$action();
      } else {
        die ('<h1>404 Page not found</h1>');
      }
    } else {
      die ('<h1>404 Page not found</h1>');
    }
  }
}
