<?

namespace application\controllers;

use application\core\Controller;
use application\core\Views;
use application\lib\db;
use application\models\States;


class StatesController extends Controller
{

  public function animeAction() {
      $params = [
        'id' => 1,
      ];
      $states = $this->model->getRecords("SELECT * FROM `states` WHERE category_id= :id", $params);
      $vars = [
        'states' => $states,
      ];
      $this->view->render("Ну че пацаны, аниме?", $vars);
  }

  public function gamesAction() {
      $params = [
        'id' => 2,
      ];
      $states = $this->model->getRecords("SELECT * FROM `states` WHERE category_id= :id", $params);
      $vars = [
        'states' => $states,
      ];
      $this->view->render("Видеоигры", $vars);
  }

  public function newsAction() {
      $params = [
        'id' => 3,
      ];
      $states = $this->model->getRecords("SELECT * FROM `states` WHERE category_id= :id", $params);
      $vars = [
        'states' => $states,
      ];
      $this->view->render("Новости", $vars);
  }

}
