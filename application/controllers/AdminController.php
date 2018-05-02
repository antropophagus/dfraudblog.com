<?php

namespace application\controllers;


use application\core\Controller;
use application\core\Views;
use application\lib\db;
use application\models\Admin;

class AdminController extends Controller
{
  public function loginAction() {
    if ($this->checkAccess(0)) {
      if (!empty($_POST)){
        if (!$this->model->loginValidate($_POST)) {
          echo "Invalid login or password!";
        } else {$_SESSION["ADMIN_LOG_IN"] = 1; header("Location: /admin/index");}
      }
      $this->view->render("Логин");
    }
    else die ("Вы уже авторизированны!");
  }
  public function indexAction()
  {
    if ($this->checkAccess(1)) {
      $this->view->render("Создать статью");
    }
    else die ("У вас нет доступа!");
  }
  public function logoutAction() {
    if ($this->checkAccess(1)) {
      session_destroy();
      header("Location: /");
    }
    else die ("У вас нет доступа!");
  }

  public function createstateAction() {
    if ($this->checkAccess(1)) {
      if (!empty($_POST)) {
          if (!$this->model->createState($_POST)) {
            echo 'Error!';
          } else echo 'Success!';
         }
         $this->view->render("Создать статью");
      }
      else die ("У вас нет доступа!");
  }

  public function editstateAction() {
    if ($this->checkAccess(1)) {
      $state = $this->model->getState($this->route["id"]);
      $vars = [
        'state' => $state,
      ];
      if (!empty($_POST)) {
        if(!$this->model->updateState($_POST, $state[0]["image"], $this->route["id"])) {
          echo 'Error';
        } else echo 'Success';
      }
      $this->view->render("Редактировать статью", $vars);
    }
    else die ("У вас нет доступа!");
  }

  public function editslideAction() {
    if ($this->checkAccess(1)) {
      $slide = $this->model->getSlide($this->route["id"]);
      $vars = [
        'slide' => $slide,
      ];
      if (!empty($_POST)) {
        if(!$this->model->updateSlide($_POST, $slide[0]["image"], $this->route["id"])) {
          echo 'Error';
        } else echo 'Success';
      }
      $this->view->render("Редактировать слайд", $vars);
    }
    else die ("У вас нет доступа!");
  }

  public function deletestateAction() {
    if ($this->checkAccess(1)) {
      if(!$this->model->deleteState($this->route["id"])) echo "error";
      else header("Location: /admin/states");
    }
    else die ("У вас нет доступа!");
  }


  public function createslideAction() {
    if ($this->checkAccess(1)) {
      if (!empty($_POST)) {
          if (!$this->model->createSlide($_POST)) {
            echo 'Error!';
          } else echo 'Success!';
         }
      $this->view->render("Создать слайд");
    }
    else die ("У вас нет доступа!");
  }

  public function slidesAction()
  {
    if ($this->checkAccess(1)) {
      $slides = $this->model->getRecords("SELECT * FROM `slides`", $params);
      $vars = [
        'slides' => $slides,
      ];
      $this->view->render("Слайды", $vars);
    }
    else die ("У вас нет доступа!");
  }

  public function statesAction()
  {
    if ($this->checkAccess(1)) {
      $states = $this->model->getRecords("SELECT * FROM `states`", $params);
      $vars = [
        'states' => $states,
      ];
      $this->view->render("Статьи", $vars);
    }
    else die ("У вас нет доступа!");
  }



  public function deleteslideAction() {
    if ($this->checkAccess(1)) {
      if(!$this->model->deleteSlide($this->route["id"])) echo "error";
      else header("Location: /admin/slides");
    }
    else die ("У вас нет доступа!");
  }
}
