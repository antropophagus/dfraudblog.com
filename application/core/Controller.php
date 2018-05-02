<?

namespace application\core;

use application\core\Views;
use application\models\Main;

abstract class Controller
{
  public $route;
  public $view;

  function __construct($route)
  {
    $this->route = $route;
    $this->view = new Views($this->route);
    $this->model = $this->loadModel($this->route["controller"]);
  }

  public function loadModel($name)
  {
    $path = 'application\models\\'.ucfirst($name);
    if (class_exists(ucfirst($path))) {
      return new $path;
    }
    return 'Class not exist';
  }

  public function checkAccess($p1)
  {
    if ($p1 == 0 and $_SESSION["ADMIN_LOG_IN"]) return false; //Only for guests
    if ($p1 == 1 and !$_SESSION["ADMIN_LOG_IN"]) return false; // Only for admins
    //If another number, for all
    return true;
  }
}
