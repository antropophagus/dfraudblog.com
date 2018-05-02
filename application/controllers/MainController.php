<?

namespace application\controllers;

use application\core\Controller;
use application\core\Views;
use application\lib\db;
use application\models\Main;

class MainController extends Controller
{
  public function indexAction()
  {
    if ($this->checkAccess(3)){
      $slides = $this->model->getRecords("SELECT * FROM `slides`", $params);
      $vars = [
        'slides' => $slides,
      ];
      $this->view->render("Главная", $vars);
    } else die ("У вас нет доступа!");
  }

  public function stateAction()
  {
    if ($this->checkAccess(3)){
      $params = [
        'id' => $this->route["id"],
      ];
      //var_dump($this->route["id"]);
      $state = $this->model->getRecords("SELECT * FROM `states` WHERE id = :id", $params);
      $vars = [
        'state' => $state,
      ];
      $this->view->render("Статья", $vars);
    } else die ("У вас нет доступа!");
  }

  public function aboutAction()
  {
    if ($this->checkAccess(3)){
      $this->view->render("О сайте", $vars);
    } else die ("У вас нет доступа!");
  }

  public function contactAction()
  {
    if ($this->checkAccess(3)){
      $this->view->render("Контакт", $vars);
    } else die ("У вас нет доступа!");
  }

}
