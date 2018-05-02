<?

namespace application\core;

class Views
{
  public $layout = 'default';
  public $view;
  public $path;

  function __construct($param)
  {
    $this->path = $param["controller"].'/'.$param["action"];
    if ($param["controller"] == "admin" and $param["action"] != "login") $this->layout = 'admin';

  }

  public function render($title, $vars = [])
  {
    extract($vars);
    $this->view = 'application/views/'.$this->path.'.php';
    ob_start();
    require $this->view;
    $content = ob_get_clean();
    require 'application/views/layouts/'.$this->layout.'.php';
  }
}
